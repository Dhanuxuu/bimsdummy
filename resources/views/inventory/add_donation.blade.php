@extends('inventory.home')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endpush

@section('subcontent')
<div class="container">
<h2>Add Donations</h2>
<div class="card-body p-4 p-md-5">
    <form method="post" action="{{ route('inventory.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Camp ID</h4>
                <!-- <input type="text" id="campID" name="campID" class="form-control" /> -->
                <select name="campID" id="campID" class="form-control">
                @foreach ($camps as $camp)
                    <option value="{{$camp->id}}">{{$camp->hbid}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-5 mb-4">
                <h4>date</h4>
                <input type="date" id="date" name="date" class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>NIC</h4>
                <input type="text" id="nic" name="nic" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Blood Category</h4>
                <select name="btype" id="btype" class="form-control">
                @foreach ($btypes as $btype)
                    <option value="{{$btype->id}}">{{$btype->name}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Amount</h4>
                <input type="text" id="amount" name="amount" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Expired Date(After 2 months)</h4>
                <input type="Date" id="expdate" name="expdate" class="form-control" value="{{ \Carbon\Carbon::now()->addMonths(2)->format('Y-m-d') }}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Storage Location</h4>
                <div class="storage-search-container">
                    <div class="input-group mb-2">
                        <input type="text" id="storage-search" class="form-control" placeholder="Type to search...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary clear-storage-search" type="button">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="storelocation" name="storelocation" class="form-control" required />
                    <input type="hidden" id="storelocation_name" name="storelocation_name" />
                    <div id="storage-results" class="list-group" style="max-height: 250px; overflow-y: auto; display: none;">
                        @foreach($hospitals as $hospital)
                            <a href="#" class="list-group-item list-group-item-action storage-item" 
                               data-name="{{ strtolower($hospital->hbname) }}" 
                               data-id="{{ $hospital->id }}">
                                {{ $hospital->hbname }} (ID: {{ $hospital->id }})
                            </a>
                        @endforeach
                    </div>
                    <div id="no-storage-results" class="alert alert-info mt-2" style="display: none;">
                        No matching locations found.
                    </div>
                    <div id="storage-validation" class="invalid-feedback">
                        Please select a valid storage location
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <h4>Hospital/Blood Bank</h4>
                <div class="hospital-search-container">
                    <div class="input-group mb-2">
                        <input type="text" id="hospital-search" class="form-control" placeholder="Type to search...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="clear-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <select id="hbid" name="hbid" class="form-control" required style="display: none;">
                        <option value="">Select a hospital/blood bank</option>
                        @foreach($hospitals as $hospital)
                            <option value="{{ $hospital->id }}" data-hbname="{{ strtolower($hospital->hbname) }}" data-hbid="{{ $hospital->id }}"
                                @if(isset($user) && $hospital->uname == $user->id) selected @endif>
                                {{ $hospital->hbname }} (ID: {{ $hospital->id }})
                            </option>
                        @endforeach
                    </select>
                    <div id="hospital-results" class="list-group" style="max-height: 250px; overflow-y: auto; display: none;">
                        @foreach($hospitals as $hospital)
                            <a href="#" class="list-group-item list-group-item-action hospital-item" 
                               data-id="{{ $hospital->id }}" 
                               data-hbname="{{ strtolower($hospital->hbname) }}" 
                               data-hbid="{{ $hospital->id }}">
                                {{ $hospital->hbname }} (ID: {{ $hospital->id }})
                            </a>
                        @endforeach
                    </div>
                    <div id="no-results" class="alert alert-info mt-2" style="display: none;">
                        No matching hospitals found.
                    </div>
                    <div id="hospital-validation" class="invalid-feedback">
                        Please select a valid hospital/blood bank
                    </div>
                </div>
            </div>
            @push('styles')
            <style>
                /* Storage Location Styles */
                .storage-search-container {
                    position: relative;
                }
                #storage-results {
                    border: 1px solid #ced4da;
                    border-radius: 0.25rem;
                    z-index: 1000;
                }
                .storage-item {
                    padding: 0.5rem 1rem;
                    cursor: pointer;
                }
                .storage-item:hover, .storage-item.highlighted {
                    background-color: #f8f9fa;
                }
                .storage-item.selected {
                    background-color: #e9ecef;
                    font-weight: bold;
                }
                .clear-storage-search {
                    cursor: pointer;
                }
                /* End Storage Location Styles */
                .hospital-search-container {
                    position: relative;
                }
                #hospital-results {
                    border: 1px solid #ced4da;
                    border-radius: 0.25rem;
                    z-index: 1000;
                }
                .hospital-item {
                    padding: 0.5rem 1rem;
                    cursor: pointer;
                }
                .hospital-item:hover, .hospital-item.highlighted {
                    background-color: #f8f9fa;
                }
                .hospital-item.selected {
                    background-color: #e9ecef;
                    font-weight: bold;
                }
                #clear-search {
                    cursor: pointer;
                }
            </style>
            @endpush

            @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                // Debug: Check if jQuery is loaded
                console.log('jQuery version:', $.fn.jquery);
                console.log('Document ready');
                $(document).ready(function() {
                    const $searchInput = $('#hospital-search');
                    const $resultsContainer = $('#hospital-results');
                    const $noResults = $('#no-results');
                    const $select = $('#hbid');
                    let selectedItem = null;

                    // Show results on input focus
                    $searchInput.on('focus', function() {
                        console.log('Input focused');
                        $resultsContainer.show();
                        filterHospitals($(this).val().toLowerCase());
                    });

                    // Hide results when clicking outside
                    $(document).on('click', function(e) {
                        console.log('Document clicked');
                        if (!$(e.target).closest('.hospital-search-container').length) {
                            $resultsContainer.hide();
                        }
                    });
                    
                    // Prevent hiding when clicking inside the dropdown
                    $resultsContainer.on('click', function(e) {
                        e.stopPropagation();
                    });

                    // Clear search
                    $('#clear-search').on('click', function() {
                        $searchInput.val('').focus();
                        filterHospitals('');
                    });

                    // Real-time search
                    $searchInput.on('input', function() {
                        const searchTerm = $(this).val().toLowerCase();
                        filterHospitals(searchTerm);
                    });

                    // Handle keyboard navigation
                    $searchInput.on('keydown', function(e) {
                        const $items = $('.hospital-item:visible');
                        const $highlighted = $('.hospital-item.highlighted');
                        let index = $items.index($highlighted);

                        switch(e.key) {
                            case 'ArrowDown':
                                e.preventDefault();
                                $items.removeClass('highlighted');
                                index = (index + 1) % $items.length;
                                $items.eq(index).addClass('highlighted');
                                scrollToItem($items.eq(index));
                                break;
                            case 'ArrowUp':
                                e.preventDefault();
                                $items.removeClass('highlighted');
                                index = (index - 1 + $items.length) % $items.length;
                                $items.eq(index).addClass('highlighted');
                                scrollToItem($items.eq(index));
                                break;
                            case 'Enter':
                                e.preventDefault();
                                if ($highlighted.length) {
                                    $highlighted.trigger('click');
                                } else if ($items.length === 1) {
                                    $items.first().trigger('click');
                                }
                                break;
                        }
                    });

                    // Select hospital on click
                    $resultsContainer.on('click', '.hospital-item', function(e) {
                        e.preventDefault();
                        selectHospital($(this));
                    });

                    function filterHospitals(searchTerm) {
                        console.log('Filtering hospitals for:', searchTerm);
                        if (searchTerm.length === 0) {
                            $('.hospital-item').show();
                            $noResults.hide();
                            $resultsContainer.show();
                            return;
                        }
                        
                        // Make sure the results container is visible when filtering
                        $resultsContainer.show();

                        let hasResults = false;
                        
                        $('.hospital-item').each(function() {
                            const $item = $(this);
                            const hbname = $item.data('hbname');
                            const hbid = $item.data('hbid').toString();
                            
                            if (hbname.includes(searchTerm) || hbid.includes(searchTerm)) {
                                $item.show();
                                hasResults = true;
                            } else {
                                $item.hide();
                            }
                        });

                        $noResults.toggle(!hasResults);
                        $resultsContainer.toggle(hasResults || searchTerm.length === 0);
                    }

                    function selectHospital($item) {
                        const id = $item.data('id');
                        const text = $item.text().trim();
                        
                        $select.val(id);
                        $searchInput.val(text);
                        $resultsContainer.hide();
                        
                        // Update selected state
                        $('.hospital-item').removeClass('selected');
                        $item.addClass('selected');
                        
                        // Trigger change event if needed
                        $select.trigger('change');
                    }

                    function scrollToItem($item) {
                        if ($item.length) {
                            const container = $resultsContainer[0];
                            const itemTop = $item.position().top + container.scrollTop;
                            const itemBottom = itemTop + $item.outerHeight();
                            const containerHeight = container.clientHeight;
                            
                            if (itemBottom > container.scrollTop + containerHeight) {
                                container.scrollTop = itemBottom - containerHeight;
                            } else if (itemTop < container.scrollTop) {
                                container.scrollTop = itemTop;
                            }
                        }
                    }

                    // Initialize with selected value if any
                    const $selectedOption = $select.find('option:selected');
                    if ($selectedOption.length && $selectedOption.val()) {
                        const selectedText = $selectedOption.text().trim();
                        $searchInput.val(selectedText);
                        
                        // Highlight the selected item in the list
                        const selectedId = $selectedOption.val();
                        $(`.hospital-item[data-id="${selectedId}"]`).addClass('selected');
                    }

                    // Storage Location Search Functionality
                    const $storageSearch = $('#storage-search');
                    const $storageResults = $('#storage-results');
                    const $noStorageResults = $('#no-storage-results');
                    const $storageInput = $('#storelocation');

                    // Show results on input focus
                    $storageSearch.on('focus', function() {
                        console.log('Storage input focused');
                        $storageResults.show();
                        filterStorageLocations($(this).val().toLowerCase());
                    });

                    // Hide results when clicking outside
                    $(document).on('click', function(e) {
                        if (!$(e.target).closest('.storage-search-container').length) {
                            $storageResults.hide();
                        }
                    });
                    
                    // Prevent hiding when clicking inside the dropdown
                    $storageResults.on('click', function(e) {
                        e.stopPropagation();
                    });

                    // Clear search
                    $('.clear-storage-search').on('click', function() {
                        $storageSearch.val('').focus();
                        filterStorageLocations('');
                    });

                    // Real-time search
                    $storageSearch.on('input', function() {
                        const searchTerm = $(this).val().toLowerCase();
                        filterStorageLocations(searchTerm);
                    });

                    // Handle keyboard navigation
                    $storageSearch.on('keydown', function(e) {
                        const $items = $('.storage-item:visible');
                        const $highlighted = $('.storage-item.highlighted');
                        let index = $items.index($highlighted);

                        switch(e.key) {
                            case 'ArrowDown':
                                e.preventDefault();
                                $items.removeClass('highlighted');
                                index = (index + 1) % $items.length;
                                $items.eq(index).addClass('highlighted');
                                scrollToItem($items.eq(index), $storageResults);
                                break;
                            case 'ArrowUp':
                                e.preventDefault();
                                $items.removeClass('highlighted');
                                index = (index - 1 + $items.length) % $items.length;
                                $items.eq(index).addClass('highlighted');
                                scrollToItem($items.eq(index), $storageResults);
                                break;
                            case 'Enter':
                                e.preventDefault();
                                if ($highlighted.length) {
                                    $highlighted.trigger('click');
                                } else if ($items.length === 1) {
                                    $items.first().trigger('click');
                                }
                                break;
                        }
                    });

                    // Select storage location on click
                    $storageResults.on('click', '.storage-item', function(e) {
                        e.preventDefault();
                        const locationName = $(this).data('name');
                        const locationId = $(this).data('id');
                        $storageInput.val(locationId);
                        $storageSearch.val($(this).text().trim());
                        $storageResults.hide();
                        
                        // Update selected state
                        $('.storage-item').removeClass('selected');
                        $(this).addClass('selected');
                    });

                    function filterStorageLocations(searchTerm) {
                        console.log('Filtering storage locations for:', searchTerm);
                        
                        if (searchTerm.length === 0) {
                            $('.storage-item').show();
                            $noStorageResults.hide();
                            $storageResults.show();
                            return;
                        }
                        
                        // Make sure the results container is visible when filtering
                        $storageResults.show();

                        let hasResults = false;
                        
                        $('.storage-item').each(function() {
                            const $item = $(this);
                            const locationName = $item.data('name');
                            const locationId = $item.data('id').toString();
                            
                            if (locationName.includes(searchTerm) || locationId.includes(searchTerm)) {
                                $item.show();
                                hasResults = true;
                            } else {
                                $item.hide();
                            }
                        });

                        $noStorageResults.toggle(!hasResults);
                        $storageResults.toggle(hasResults || searchTerm.length === 0);
                    }

                    // Update scrollToItem to accept container parameter
                    function scrollToItem($item, container) {
                        if ($item.length) {
                            const containerEl = container[0];
                            const itemTop = $item.position().top + containerEl.scrollTop;
                            const itemBottom = itemTop + $item.outerHeight();
                            const containerHeight = containerEl.clientHeight;
                            
                            if (itemBottom > containerEl.scrollTop + containerHeight) {
                                containerEl.scrollTop = itemBottom - containerHeight;
                            } else if (itemTop < containerEl.scrollTop) {
                                containerEl.scrollTop = itemTop;
                            }
                        }
                    }
                });
            </script>
            @endpush
            <div class="mt-4 pt-2">
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </div>
        </div>
    </form>
    <br><br>
</div> 
</div>
@endsection