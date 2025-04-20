@extends('inventory.home')

@section('subcontent')
<br><br>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Blood Type</th>
            <th>A+</th>
            <th>A-</th>
            <th>B+</th>
            <th>B-</th>
            <th>O+</th>
            <th>O-</th>
            <th>AB+</th>
            <th>AB-</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Donated amount as at {{ \Carbon\Carbon::now()->format('Y-m-d') }}</td>
            <td>{{ $ap }}</td>
            <td>{{ $an }}</td>
            <td>{{ $bp }}</td>
            <td>{{ $bn }}</td>
            <td>{{ $op }}</td>
            <td>{{ $on }}</td>
            <td>{{ $abp }}</td>
            <td>{{ $abn }}</td>
            <td></td>
        </tr>
        <tr>
            <td>New amount</td>
                <td><input type="number" min="0" name="ap" id="ap" class="form-control new" data-type="ap"></td>
                <td><input type="number" min="0" name="an" id="an" class="form-control new" data-type="an"></td>
                <td><input type="number" min="0" name="bp" id="bp" class="form-control new" data-type="bp"></td>
                <td><input type="number" min="0" name="bn" id="bn" class="form-control new" data-type="bn"></td>
                <td><input type="number" min="0" name="op" id="op" class="form-control new" data-type="op"></td>
                <td><input type="number" min="0" name="on" id="on" class="form-control new" data-type="on"></td>
                <td><input type="number" min="0" name="abp" id="abp" class="form-control new" data-type="abp"></td>
                <td><input type="number" min="0" name="abn" id="abn" class="form-control new" data-type="abn"></td>
                <input type="text" name="hbid" id="hbid" class="form-control" value="{{ $users }}" hidden>
                <td>
                </td>
        </tr>
        <tr>
            <td>Current amount as at {{ $binventory->created_at }}</td>
            <td>{{ $binventory->ap ?? 0 }}</td>
            <td>{{ $binventory->an ?? 0 }}</td>
            <td>{{ $binventory->bp ?? 0 }}</td>
            <td>{{ $binventory->bn ?? 0 }}</td>
            <td>{{ $binventory->op ?? 0 }}</td>
            <td>{{ $binventory->on ?? 0 }}</td>
            <td>{{ $binventory->abp ?? 0 }}</td>
            <td>{{ $binventory->abn ?? 0 }}</td>
            <td></td>
        </tr>
        <tr>
            <td>Transferred amount</td>
            <td><input type="number" min="0" class="transfer" data-type="ap" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="an" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="bp" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="bn" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="op" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="on" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="abp" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="abn" value="0"></td>
            <td></td>
        </tr>
        <tr>
            <td>Updated amount as at {{ \Carbon\Carbon::now()->format('Y-m-d') }}</td>
            <form method="post" action="{{ route('inventory.newamount_update') }}">
                @csrf
                @foreach(['ap', 'an', 'bp', 'bn', 'op', 'on', 'abp', 'abn'] as $type)
                    <td>
                        <span id="updated-{{ $type }}">{{ $binventory->$type ?? 0 }}</span>
                        <input type="hidden" name="{{ $type }}" id="input-{{ $type }}" value="{{ $binventory->$type ?? 0 }}">
                    </td>
                @endforeach
                <input type="hidden" name="hbid" value="{{ $users }}">
                <td>
                    <button type="submit" class="btn btn-primary">Update</button>
                </td>
            </form>
        </tr>
    </tbody>
</table>
</div>

<script>
    const current = {
        ap: {{ $binventory->ap ?? 0 }},
        an: {{ $binventory->an ?? 0 }},
        bp: {{ $binventory->bp ?? 0 }},
        bn: {{ $binventory->bn ?? 0 }},
        op: {{ $binventory->op ?? 0 }},
        on: {{ $binventory->on ?? 0 }},
        abp: {{ $binventory->abp ?? 0 }},
        abn: {{ $binventory->abn ?? 0 }},
    };

    const newAmounts = {};
    const transferAmounts = {};

    const updateDisplay = (type) => {
        const newVal = newAmounts[type] || 0;
        const transferVal = transferAmounts[type] || 0;
        const updated = Math.max(current[type] + newVal - transferVal, 0);
        document.getElementById(`updated-${type}`).innerText = updated;
        document.getElementById(`input-${type}`).value = updated;
    };

    document.querySelectorAll('.new').forEach(input => {
        input.addEventListener('input', () => {
            const type = input.dataset.type;
            newAmounts[type] = parseInt(input.value) || 0;
            updateDisplay(type);
        });
    });

    document.querySelectorAll('.transfer').forEach(input => {
        input.addEventListener('input', () => {
            const type = input.dataset.type;
            transferAmounts[type] = parseInt(input.value) || 0;
            updateDisplay(type);
        });
    });
</script>
@endsection
