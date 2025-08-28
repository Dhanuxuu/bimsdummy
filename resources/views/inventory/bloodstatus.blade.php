@extends('inventory.home')

@section('subcontent')
<h2>Blood Status</h2>
        <div class="card-body p-4 p-md-5" >
        <form>
        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search hospitals or blood banks...">
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search Province</h3>
            <select name="province" id="province" class="form-control">
                <option value="">-- Select Province --</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province }}">{{ $province }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search District</h3>
            <select name="district" id="district" class="form-control">
                <option value="">-- Select District --</option>
                @foreach ($districts as $district)
                    <option value="{{ $district }}">{{ $district }}</option>
                @endforeach
            </select>
            </div>
            </div>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search Blood Component</h3>
            <select name="bloodtype" id="bloodtype" class="form-control">
            <option value="">-- Select Blood Component --</option>
                @foreach ($bloodtypes as $bloodtype)
                <option value="{{$bloodtype->id}}">{{$bloodtype->name}}</option>
                @endforeach
            </select>
            </div>
            </div>
            <div class="mt-4 pt-2">
                <button type="button" class="btn btn-primary me-2" onclick="filterTable()">
                    Search
                </button>
                <button type="button" class="btn btn-secondary" onclick="resetFilters()">
                    Reset
                </button>
            </div>
        </form>
        <br><br>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Blood Bank/Hospital Name</th>
                <th>Province</th>
                <th>District</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact no.</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
            <tr>
                <td>{{ $hospital->hbname }}</td>
                <td>{{ $hospital->province }}</td>
                <td>{{ $hospital->district }}</td>
                <td>{{ $hospital->hbaddress }}</td>
                <td>{{ $hospital->email }}</td>
                <td>{{ $hospital->phone }}</td>
            @php
                $inventory = $latestInventories->firstWhere('hbid', $hospital->id);
            @endphp
            <td class="blood-types" data-inventory='@json($inventory)'></td>

            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
</div>
<script>
    function formatAvailableBloodTypes(inventory) {
        if (!inventory) return "";
        
        const typeLabels = {
            ap: "A+",
            an: "A-",
            bp: "B+",
            bn: "B-",
            op: "O+",
            on: "O-",
            abp: "AB+",
            abn: "AB-",
            ohp: "OH+",
            ohn: "OH-"
        };

        return Object.entries(typeLabels)
            .filter(([key]) => inventory[key] && inventory[key] != 0)
            .map(([_, label]) => label)
            .join(", ");
    }

    document.querySelectorAll('.blood-types').forEach(el => {
        const data = el.dataset.inventory;
        if (data) {
            const inventory = JSON.parse(data);
            el.innerText = formatAvailableBloodTypes(inventory);
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('searchInput');
        input.addEventListener('keyup', function () {
            const filter = input.value.toLowerCase();
            const rows = document.querySelectorAll('table tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    });
</script>
<script>
    function filterTable() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        const selectedProvince = document.getElementById('province').value.toLowerCase();
        const selectedDistrict = document.getElementById('district').value.toLowerCase();
        const selectedBloodType = document.getElementById('bloodtype').options[document.getElementById('bloodtype').selectedIndex].text;

        const rows = document.querySelectorAll('table tbody tr');

        rows.forEach(row => {
            const hospitalText = row.textContent.toLowerCase();
            const province = row.children[1].textContent.toLowerCase();
            const district = row.children[2].textContent.toLowerCase();
            const availableBlood = row.querySelector('.blood-types')?.textContent || '';

            const matchSearch = hospitalText.includes(searchText);
            const matchProvince = selectedProvince === '' || province === selectedProvince;
            const matchDistrict = selectedDistrict === '' || district === selectedDistrict;
            const matchBlood = selectedBloodType === '-- Select Blood Component --' || availableBlood.includes(selectedBloodType);

            row.style.display = (matchSearch && matchProvince && matchDistrict && matchBlood) ? '' : 'none';
        });
    }

    function resetFilters() {
        document.getElementById('searchInput').value = '';
        document.getElementById('province').value = '';
        document.getElementById('district').value = '';
        document.getElementById('bloodtype').value = '';
        filterTable(); // Reapply filter after reset to show all
    }
</script>
@endsection