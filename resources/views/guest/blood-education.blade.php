@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">
                    <h2 class="mb-0">Blood Donation Education</h2>
                </div>
                <div class="card-body">
                    <!-- Why Donate Blood -->
                    <div class="mb-4">
                        <h3 class="text-danger">Why Donate Blood?</h3>
                        <p>Blood donation is a simple, safe way to help save lives. Every day, blood donors help patients of all ages: accident and burn victims, heart surgery and organ transplant patients, and those battling cancer.</p>
                    </div>

                    <!-- Who Can Donate -->
                    <div class="mb-4">
                        <h3 class="text-danger">Who Can Donate?</h3>
                        <ul>
                            <li>Be at least 17 years old in most states</li>
                            <li>Weigh at least 110 pounds</li>
                            <li>Be in good health and feeling well</li>
                            <li>Have not donated blood in the last 56 days</li>
                        </ul>
                    </div>

                    <!-- Donation Process -->
                    <div class="mb-4">
                        <h3 class="text-danger">The Donation Process</h3>
                        <ol>
                            <li><strong>Registration:</strong> Complete the donor registration form.</li>
                            <li><strong>Health Check:</strong> Have a quick health check-up.</li>
                            <li><strong>Donation:</strong> The actual blood donation takes about 8-10 minutes.</li>
                            <li><strong>Refreshments:</strong> Enjoy snacks and rest for 10-15 minutes.</li>
                        </ol>
                    </div>

                    <!-- Health Benefits -->
                    <div class="mb-4">
                        <h3 class="text-danger">Health Benefits</h3>
                        <ul>
                            <li>Reduces iron levels in the blood</li>
                            <li>Helps maintain cardiovascular health</li>
                            <li>Stimulates blood cell production</li>
                            <li>Helps in weight management</li>
                        </ul>
                    </div>

                    <!-- Myths -->
                    <div class="mb-4">
                        <h3 class="text-danger">Common Myths</h3>
                        <div class="alert alert-info">
                            <p class="mb-1"><strong>Myth:</strong> Donating blood is painful.</p>
                            <p class="mb-1"><strong>Fact:</strong> You might feel a slight pinch when the needle is inserted, but the process itself is generally painless.</p>
                        </div>
                        <div class="alert alert-info">
                            <p class="mb-1"><strong>Myth:</strong> You can get diseases from donating blood.</p>
                            <p class="mb-1"><strong>Fact:</strong> New, sterile equipment is used for each donor, making the process completely safe.</p>
                        </div>
                    </div>

                    <!-- Blood Type Info -->
                    <div class="mb-4">
                        <h3 class="text-danger">Blood Type Compatibility & Facts</h3>
                        <p>Understanding blood types is crucial for safe transfusions. Here’s a breakdown of the major types and their compatibility:</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-danger text-center">
                                    <tr>
                                        <th>Blood Type</th>
                                        <th>Can Donate To</th>
                                        <th>Can Receive From</th>
                                        <th>Special Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A+</td>
                                        <td>A+, AB+</td>
                                        <td>A+, A−, O+, O−</td>
                                        <td>Second most common; 1 in 3 people</td>
                                    </tr>
                                    <tr>
                                        <td>A−</td>
                                        <td>A+, A−, AB+, AB−</td>
                                        <td>A−, O−</td>
                                        <td>Important for A− and AB− patients</td>
                                    </tr>
                                    <tr>
                                        <td>B+</td>
                                        <td>B+, AB+</td>
                                        <td>B+, B−, O+, O−</td>
                                        <td>Can help B+ and AB+ recipients</td>
                                    </tr>
                                    <tr>
                                        <td>B−</td>
                                        <td>B+, B−, AB+, AB−</td>
                                        <td>B−, O−</td>
                                        <td>Rare but essential for B− patients</td>
                                    </tr>
                                    <tr>
                                        <td>AB+</td>
                                        <td>AB+</td>
                                        <td>All blood types (Universal recipient)</td>
                                        <td>Can receive from anyone</td>
                                    </tr>
                                    <tr>
                                        <td>AB−</td>
                                        <td>AB+, AB−</td>
                                        <td>AB−, A−, B−, O−</td>
                                        <td>Rare; universal plasma donor</td>
                                    </tr>
                                    <tr>
                                        <td>O+</td>
                                        <td>O+, A+, B+, AB+</td>
                                        <td>O+, O−</td>
                                        <td>Most common; vital in emergencies</td>
                                    </tr>
                                    <tr>
                                        <td>O−</td>
                                        <td>All blood types (Universal donor)</td>
                                        <td>O−</td>
                                        <td>Critical in trauma situations</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Blood Components Education -->
                    <div class="mb-4">
                        <h3 class="text-danger">Blood Components Explained</h3>
                        <!-- <div class="row justify-content-center align-items-center h-50">
                            <div class="col-md-6 mb-4">
                                <h5 class="mb-4">Red Blood Cells</h5>
                                <table>
                                    <tr>
                                        <td style="width: 250px;">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Red_blood_cells.jpg" alt="Red Blood Cells" class="img-fluid rounded shadow">
                                        </td>
                                        <td style="width: 350px;">
                                            <p>Red blood cells (RBCs) carry oxygen from the lungs to tissues and return carbon dioxide to the lungs. They’re essential for treating anemia and blood loss from surgeries or trauma.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5 class="mb-4">Platelets</h5>
                                <table>
                                    <tr>
                                        <td style="width: 250px;">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Platelets.jpg" alt="Platelets" class="img-fluid rounded shadow">
                                        </td>
                                        <td style="width: 350px;">
                                            <p>Platelets help the blood clot and are essential for preventing excessive bleeding. They’re especially needed by patients with cancer, blood disorders, or undergoing major surgery.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center h-50">

                            <div class="col-md-6 mb-4">
                                <h5 class="mb-4">Plasma</h5>
                                <table>
                                    <tr>
                                        <td style="width: 250px;">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Blood_plasma.png" alt="Plasma" class="img-fluid rounded shadow">
                                        </td>
                                        <td style="width: 350px;">
                                            <p>Plasma is the liquid portion of blood that carries proteins, hormones, and nutrients. It’s crucial for clotting and treating burn victims and people with liver conditions or bleeding disorders.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="mb-4">White Blood Cells</h5>
                                <table>
                                    <tr>
                                        <td style="width: 250px;">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/White_blood_cell.jpg" alt="White Blood Cells" class="img-fluid rounded shadow">
                                        </td>
                                        <td style="width: 350px;">
                                            <p>White blood cells (WBCs) fight infections and protect the body against disease. Though not commonly transfused, they play a critical role in the immune response and are vital for cancer patients.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div> -->
                        <div class="row justify-content-center align-items-center h-50">
                            @foreach($education as $component)
                                <div class="col-md-6 mb-4">
                                    <h5 class="mb-4">{{ $component->name }}</h5>
                                    <table>
                                        <tr>
                                            <td style="width: 250px;">
                                                <img src="{{ asset('images/' . $component->image) }}" alt="{{ $component->name }}" class="img-fluid rounded shadow">
                                            </td>
                                            <td style="width: 350px;">
                                                <p>{{ $component->description }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
