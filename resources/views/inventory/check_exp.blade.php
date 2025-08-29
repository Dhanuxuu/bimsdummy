@extends('inventory.home')

@section('subcontent')
<div class="container">
    <h2>Check Expired Component</h2>
    <div class="card-body p-4 p-md-5">
        <form onsubmit="return false;">
            <div class="row">
                <div class="col-md-5 mb-4">
                    <h4>Date</h4>
                    <input type="date" id="expdate" class="form-control" />
                </div>
                <div class="col-md-5 mb-4">
                    <h4>Camp ID</h4>
                    <input type="text" id="campID" class="form-control" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-4">
                    <h4>Category</h4>
                    <select id="btype" class="form-control">
                        <option value="">-- All --</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                        <option value="9">Oh+</option>
                        <option value="10">Oh-</option>
                    </select>
                </div>
                <div class="mt-4 pt-2">
                    <button type="button" class="btn btn-primary me-2" onclick="filterTable()">
                        Search
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="resetFilters()">
                        Reset
                    </button>
                </div>

            </div>
        </form><br><br>

        <table class="table table-bordered" id="bloodTable">
            <thead>
                <tr>
                    <th>Camp ID</th>
                    <th>Location</th>
                    <th>Blood Category</th>
                    <th>Blood Component</th>
                    <th>Amount</th>
                    <th>Date of Expired</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donate as $item)
                <tr>
                    <td>{{ $item->campID }}</td>
                    <td>{{ $item->storelocation }}</td>
                    <td>
                        @switch($item->btype )
                            @case(1) A+ @break
                            @case(2) A- @break
                            @case(3) B+ @break
                            @case(4) B- @break
                            @case(5) AB+ @break
                            @case(6) AB- @break
                            @case(7) O+ @break
                            @case(8) O- @break
                            @case(9) Oh+ @break
                            @case(10) Oh- @break
                        @endswitch
                    </td>
                    <td>
                        @switch($item->bcomp)
                            @case(5) Whole Blood @break
                            @case(6) Single Donor Platelet @break
                            @case(7) Single Donor Plasma @break
                            @case(8) Sagm Packed Red Blood Cells @break
                            @case(9) Random Donor Platelets @break
                            @case(10) Platelet Rich Plasma @break
                            @case(11) Platelet Concentrate @break
                            @case(12) Plasma @break
                            @case(13) Packed Red Blood Cells @break
                            @case(14) Leukoreduced RBC @break
                            @case(15) Irradiated RBC @break
                            @case(16) Fresh Frozen Plasma @break
                            @case(17) Cryoprecipitate @break
                            @case(18) Cryo Poor Plasma @break
                        @endswitch 
                    </td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->expdate }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>

<!-- <script>
    function filterTable() {
        const campID = document.getElementById('campID').value.toLowerCase();
        const expdate = document.getElementById('expdate').value;
        const btype = document.getElementById('btype').value.toLowerCase();
        const table = document.getElementById('bloodTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            const tdCamp = tr[i].getElementsByTagName('td')[0]?.textContent.toLowerCase();
            const tdBtype = tr[i].getElementsByTagName('td')[2]?.textContent.toLowerCase();
            const tdExpDate = tr[i].getElementsByTagName('td')[4];

            const showRow =
                (campID === '' || tdCamp.includes(campID)) &&
                (btype === '' || tdBtype === btype) &&
                (expdate === '' || tdExpDate?.textContent === expdate);

            tr[i].style.display = showRow ? '' : 'none';
        }
    }
</script>
<script>
    function filterTable() {
        const campID = document.getElementById('campID').value.toLowerCase();
        const expdate = document.getElementById('expdate').value;
        const btype = document.getElementById('btype').value.toLowerCase();
        const table = document.getElementById('bloodTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            const tdCamp = tr[i].getElementsByTagName('td')[0]?.textContent.toLowerCase();
            const tdBtype = tr[i].getElementsByTagName('td')[2]?.textContent.toLowerCase();
            const tdExpDate = tr[i].getElementsByTagName('td')[4];

            const showRow =
                (campID === '' || tdCamp.includes(campID)) &&
                (btype === '' || tdBtype === btype) &&
                (expdate === '' || tdExpDate?.textContent === expdate);

            tr[i].style.display = showRow ? '' : 'none';
        }
    }

    function resetFilters() {
        document.getElementById('campID').value = '';
        document.getElementById('expdate').value = '';
        document.getElementById('btype').value = '';

        const table = document.getElementById('bloodTable');
        const tr = table.getElementsByTagName('tr');

        // Show all rows
        for (let i = 1; i < tr.length; i++) {
            tr[i].style.display = '';
        }
    }
</script> -->
<script>
    function filterTable() {
        const campID = document.getElementById('campID').value.toLowerCase();
        const expdate = document.getElementById('expdate').value;
        const btype = document.getElementById('btype').value; // <-- get the select value directly (1–8 etc.)

        const table = document.getElementById('bloodTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            const tdCamp = tr[i].getElementsByTagName('td')[0]?.textContent.toLowerCase();
            const tdBtype = tr[i].getElementsByTagName('td')[2]?.textContent.trim(); // e.g. "A+"
            const tdExpDate = tr[i].getElementsByTagName('td')[5]?.textContent.trim(); // fixed index

            // Map select values back to actual blood types
            const btypeMap = {
                "1": "A+",
                "2": "A-",
                "3": "B+",
                "4": "B-",
                "5": "AB+",
                "6": "AB-",
                "7": "O+",
                "8": "O-",
                "9": "Oh+",
                "10": "Oh-",
            };

            const selectedType = btype ? btypeMap[btype] : "";

            const showRow =
                (campID === '' || tdCamp.includes(campID)) &&
                (btype === '' || tdBtype === selectedType) &&
                (expdate === '' || tdExpDate === expdate);

            tr[i].style.display = showRow ? '' : 'none';
        }
    }

    function resetFilters() {
        document.getElementById('campID').value = '';
        document.getElementById('expdate').value = '';
        document.getElementById('btype').value = '';

        const table = document.getElementById('bloodTable');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            tr[i].style.display = '';
        }
    }
</script>

@endsection
