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
                        <option value="5">O+</option>
                        <option value="6">O-</option>
                        <option value="7">AB+</option>
                        <option value="8">AB-</option>
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
                    <th>Amount</th>
                    <th>Date of Expired</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donate as $item)
                <tr>
                    <td>{{ $item->campID }}</td>
                    <td>{{ $item->storelocation }}</td>
                    <td>{{ $item->btype }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->expdate }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>

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
</script>

@endsection
