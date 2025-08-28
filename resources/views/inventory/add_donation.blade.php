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
                    <option value="{{$camp->id}}">{{$camp->id}} - {{$camp->location}}</option>
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
            <div class="col-md-5 mb-4">
                <h4>Blood Component</h4>
                <select name="bcomp" id="bcomp" class="form-control">
                @foreach ($bcomp as $type)
                    <option value="{{$type->id}}">{{$type->component}}</option>
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

        <input type="hidden" id="storelocation" name="storelocation" required />

        <div id="no-storage-results" class="alert alert-info mt-2" style="display:none;">
            No matching locations found.
        </div>
        
        <!-- Suggestion dropdown -->
        <ul id="storage-suggestions" class="list-group" style="max-height:200px;overflow-y:auto;display:none;"></ul>

        <div id="storage-validation" class="invalid-feedback">
            Please select a valid storage location
        </div>
    </div>
</div>

<script>
    // Example: locations from DB or hardcoded
    const storageLocations = @json($hospitals->pluck('hbname'));

    const input = document.getElementById("storage-search");
    const hiddenInput = document.getElementById("storelocation");
    const suggestionBox = document.getElementById("storage-suggestions");
    const noResults = document.getElementById("no-storage-results");

    input.addEventListener("input", function () {
        const query = this.value.toLowerCase();
        suggestionBox.innerHTML = "";
        let matches = storageLocations.filter(loc => loc.toLowerCase().includes(query));

        if (query.length === 0 || matches.length === 0) {
            suggestionBox.style.display = "none";
            noResults.style.display = matches.length === 0 && query.length > 0 ? "block" : "none";
            return;
        }

        noResults.style.display = "none";
        suggestionBox.style.display = "block";

        matches.forEach(loc => {
            let li = document.createElement("li");
            li.textContent = loc;
            li.className = "list-group-item list-group-item-action";
            li.style.cursor = "pointer";
            li.addEventListener("click", function () {
                input.value = loc;         // fill text input
                hiddenInput.value = loc;   // set hidden input
                suggestionBox.style.display = "none"; 
            });
            suggestionBox.appendChild(li);
        });
    });

    // Clear button
    document.querySelector(".clear-storage-search").addEventListener("click", () => {
        input.value = "";
        hiddenInput.value = "";
        suggestionBox.style.display = "none";
        noResults.style.display = "none";
    });
</script>

            <div class="col-md-5 mb-4">
                <h4>Hospital/Blood Bank ID</h4>
                <div class="hospital-search-container">
                    <div class="input-group mb-2"> 
                         @foreach ($hospitals as $user)
                            @if ($user->uname==Auth::user()->id)
                            <input type="text" id="hbid" name="hbid" class="form-control" value="{{ $user->id }}" readonly/>
                            @endif
                        @endforeach
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