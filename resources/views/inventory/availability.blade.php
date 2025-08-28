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
            <th>Oh+</th>
            <th>Oh-</th>
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
            <td>{{ $ohp }}</td>
            <td>{{ $ohn }}</td>
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
                <td><input type="number" min="0" name="ohp" id="ohp" class="form-control new" data-type="ohp"></td>
                <td><input type="number" min="0" name="ohn" id="ohn" class="form-control new" data-type="ohn"></td>
                @php
                    $hbid = $users ?? Auth::user()->id;
                @endphp
                <input type="text" name="hbid" id="hbid" class="form-control" value="{{ $hbid }}" hidden>
                <td>
                </td>
        </tr>
        @php
            $currentDate = now()->format('Y-m-d H:i:s');
            $defaultInventory = (object)[
                'created_at' => $currentDate,
                'ap' => 0,
                'an' => 0,
                'bp' => 0,
                'bn' => 0,
                'op' => 0,
                'on' => 0,
                'abp' => 0,
                'abn' => 0,
                'ohp' => 0,
                'ohn' => 0
            ];
            $inventory = $binventory ?? $defaultInventory;
        @endphp
        <tr>
            <td>Current amount as at {{ $inventory->created_at }}</td>
            <td>{{ $inventory->ap }}</td>
            <td>{{ $inventory->an }}</td>
            <td>{{ $inventory->bp }}</td>
            <td>{{ $inventory->bn }}</td>
            <td>{{ $inventory->op }}</td>
            <td>{{ $inventory->on }}</td>
            <td>{{ $inventory->abp }}</td>
            <td>{{ $inventory->abn }}</td>
            <td>{{ $inventory->ohp }}</td>
            <td>{{ $inventory->ohn }}</td>
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
            <td><input type="number" min="0" class="transfer" data-type="ohp" value="0"></td>
            <td><input type="number" min="0" class="transfer" data-type="ohn" value="0"></td>
            <td></td>
        </tr>
        <tr>
            <td>Updated amount as at {{ \Carbon\Carbon::now()->format('Y-m-d') }}</td>
            <form method="post" action="{{ route('inventory.newamount_update') }}">
                @csrf
                @foreach(['ap', 'an', 'bp', 'bn', 'op', 'on', 'abp', 'abn', 'ohp', 'ohn'] as $type)
                    <td>
                        <span id="updated-{{ $type }}">{{ $inventory->$type ?? 0 }}</span>
                        <input type="hidden" name="{{ $type }}" id="input-{{ $type }}" value="{{ $inventory->$type ?? 0 }}">
                    </td>
                @endforeach
                <input type="hidden" name="hbid" value="{{ $hbid }}">
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
        ap: {{ $inventory->ap ?? 0 }},
        an: {{ $inventory->an ?? 0 }},
        bp: {{ $inventory->bp ?? 0 }},
        bn: {{ $inventory->bn ?? 0 }},
        op: {{ $inventory->op ?? 0 }},
        on: {{ $inventory->on ?? 0 }},
        abp: {{ $inventory->abp ?? 0 }},
        abn: {{ $inventory->abn ?? 0 }},
        ohp: {{ $inventory->ohp ?? 0 }},
        ohn: {{ $inventory->ohn ?? 0 }}
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
