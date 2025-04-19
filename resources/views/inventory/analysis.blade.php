@extends('inventory.home')

@section('subcontent')
<h2>Blood Status</h2>
        <div class="card-body p-4 p-md-5" >
        <form>
        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search hospitals or blood banks...">
        </form>
        <br><br>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Blood Bank/Hospital Name</th>
                @foreach ($bloodtypes as $bloodtype)
                <th>{{$bloodtype->name}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
                <tr>
                    <td>{{ $hospital->hbname }}</td>

                    @php
                        $inventory = $latestInventories->firstWhere('hbid', $hospital->id);
                    @endphp

                    @foreach ($bloodtypes as $bloodtype)
                        @php
                            $key = strtolower(str_replace(['+', '-'], ['p', 'n'], $bloodtype->name)); // Convert A+ to ap, etc.
                            $value = $inventory ? $inventory[$key] : 0;
                        @endphp
                        <td>{{ $value }}</td>
                    @endforeach
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
            abn: "AB-"
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
@endsection