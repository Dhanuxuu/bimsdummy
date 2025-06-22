// Page Loader functionality
class PageLoader {
    constructor() {
        this.loader = null;
        this.isLoading = false;
        this.loaderTimeout = null;
        this.init();
    }

    init() {
        // Inject CSS styles
        this.injectStyles();
        
        // Create loader HTML if it doesn't exist
        if (!document.getElementById('page-loader-overlay')) {
            this.createLoader();
        }
        
        this.loader = document.getElementById('page-loader-overlay');
        this.bindEvents();
    }

    injectStyles() {
        // Check if styles are already injected
        if (document.getElementById('page-loader-styles')) {
            return;
        }

        const styles = `
            /* Page Loader Overlay */
            .page-loader-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.95);
                z-index: 9999;
                display: none;
                justify-content: center;
                align-items: center;
                backdrop-filter: blur(5px);
                transition: opacity 0.3s ease-in-out;
            }

            .page-loader-overlay.show {
                display: flex;
                opacity: 1;
            }

            .page-loader-overlay.hide {
                opacity: 0;
                pointer-events: none;
            }

            /* Custom Pulse Loader */
            #css3-spinner-svg-pulse-wrapper {
                position: absolute;
                overflow: hidden;
                width: 260px;
                height: 210px;
                top: 50%;
                left: 50%;
                margin-top: -105px;
                margin-left: -130px;
                background-color: transparent;
                animation: none;
                -webkit-animation: none;
            }

            #css3-spinner-svg-pulse {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -105px;
                margin-left: -275px;
            }

            #css3-spinner-pulse {
                stroke-dasharray: 281;
                -webkit-animation: dash 5s infinite linear forwards;
            }

            /* Animation */
            @-webkit-keyframes dash {
                from {
                    stroke-dashoffset: 814;
                }
                to {
                    stroke-dashoffset: -814;
                }
            }

            @keyframes dash {
                from {
                    stroke-dashoffset: 814;
                }
                to {
                    stroke-dashoffset: -814;
                }
            }

            /* Loading Text */
            .loader-text {
                position: absolute;
                bottom: -60px;
                left: 50%;
                transform: translateX(-50%);
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color: #DE6262;
                font-weight: 600;
                text-align: center;
                white-space: nowrap;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                #css3-spinner-svg-pulse-wrapper {
                    width: 200px;
                    height: 160px;
                    margin-top: -80px;
                    margin-left: -100px;
                }
                
                #css3-spinner-svg-pulse {
                    margin-top: -80px;
                    margin-left: -220px;
                }
                
                .loader-text {
                    font-size: 14px;
                    bottom: -50px;
                }
            }
        `;

        const styleSheet = document.createElement('style');
        styleSheet.id = 'page-loader-styles';
        styleSheet.textContent = styles;
        document.head.appendChild(styleSheet);
    }

    createLoader() {
        const loaderHTML = `
            <div id="page-loader-overlay" class="page-loader-overlay">
                <div id="css3-spinner-svg-pulse-wrapper">
                    <svg id="css3-spinner-svg-pulse" version="1.2" height="210" width="550" xmlns="http://www.w3.org/2000/svg" viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path id="css3-spinner-pulse" stroke="#DE6262" fill="none" stroke-width="2" stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" />
                    </svg>
                    <div class="loader-text">Loading...</div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', loaderHTML);
    }

    bindEvents() {
        // Intercept all internal links
        document.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            if (link && this.shouldShowLoader(link)) {
                e.preventDefault();
                this.showLoader();
                
                // Set a timeout to hide loader if navigation doesn't happen
                this.loaderTimeout = setTimeout(() => {
                    this.hideLoader();
                }, 2000); // 2 seconds timeout
                
                // Navigate after a short delay to show the loader
                setTimeout(() => {
                    window.location.href = link.href;
                }, 300);
            }
        });

        // Handle form submissions (but exclude logout forms)
        document.addEventListener('submit', (e) => {
            if (e.target.tagName === 'FORM' && 
                !e.target.classList.contains('no-loader') && 
                !e.target.action.includes('/logout')) {
                this.showLoader();
                
                // Set a timeout for form submissions too
                this.loaderTimeout = setTimeout(() => {
                    this.hideLoader();
                }, 2000); // 2 seconds timeout
            }
        });

        // Handle browser back/forward buttons
        window.addEventListener('beforeunload', () => {
            this.showLoader();
        });

        // Hide loader when page is fully loaded
        window.addEventListener('load', () => {
            this.hideLoader();
        });

        // Hide loader if page is already loaded
        if (document.readyState === 'complete') {
            this.hideLoader();
        } else {
            document.addEventListener('DOMContentLoaded', () => {
                this.hideLoader();
            });
        }
    }

    shouldShowLoader(link) {
        // Don't show loader for external links, anchors, or special links
        const href = link.href;
        const isExternal = link.hostname !== window.location.hostname;
        const isAnchor = href.includes('#') && !href.includes(window.location.origin);
        const isSpecialLink = link.getAttribute('target') === '_blank' || 
                             link.getAttribute('download') !== null ||
                             link.classList.contains('no-loader');
        
        // Only show loader for actual page navigation (not forms, logout, etc.)
        const isNavigationLink = !href.includes('/logout') && 
                                !href.includes('javascript:') && 
                                !href.includes('mailto:') && 
                                !href.includes('tel:');
        
        return !isExternal && !isAnchor && !isSpecialLink && isNavigationLink && href !== window.location.href;
    }

    showLoader() {
        if (this.isLoading) return;
        
        this.isLoading = true;
        this.loader.classList.add('show');
        
        // Update loading text with random messages
        const loadingTexts = [
            'Loading...',
            'Preparing your page...',
            'Almost there...',
            'Loading content...',
            'Please wait...'
        ];
        
        const textElement = this.loader.querySelector('.loader-text');
        if (textElement) {
            textElement.textContent = loadingTexts[Math.floor(Math.random() * loadingTexts.length)];
        }
    }

    hideLoader() {
        if (!this.isLoading) return;
        
        // Clear any existing timeout
        if (this.loaderTimeout) {
            clearTimeout(this.loaderTimeout);
            this.loaderTimeout = null;
        }
        
        this.loader.classList.add('hide');
        
        setTimeout(() => {
            this.loader.classList.remove('show', 'hide');
            this.isLoading = false;
        }, 300);
    }

    // Method to manually show loader
    show() {
        this.showLoader();
    }

    // Method to manually hide loader
    hide() {
        this.hideLoader();
    }
}

// Initialize page loader when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.pageLoader = new PageLoader();
});

// Also initialize if script is loaded after DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.pageLoader = new PageLoader();
    });
} else {
    window.pageLoader = new PageLoader();
} 