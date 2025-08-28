@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

<br><br>
<div class="container">

    <!-- Date Range Filter -->
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="startDate">Start Date</label>
            <input type="date" id="startDate" class="form-control">
        </div>
        <div class="col-md-3">
            <label for="endDate">End Date</label>
            <input type="date" id="endDate" class="form-control">
        </div>
        <div class="col-md-3 align-self-end">
            <button class="btn btn-primary" onclick="filterByDate()">Filter</button>
            <button class="btn btn-secondary" onclick="resetFilter()">Reset</button>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-bordered" id="inventoryTable">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Name</th>
          <th scope="col">A+</th>
          <th scope="col">A-</th>
          <th scope="col">B+</th>
          <th scope="col">B-</th>
          <th scope="col">AB+</th>
          <th scope="col">AB-</th>
          <th scope="col">O+</th>
          <th scope="col">O-</th>
          <th scope="col">OH+</th>
          <th scope="col">OH-</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
        </tr>
      </thead>
      <tbody>
        @php $count = 1; @endphp
        @foreach ($inventory as $item)
        <tr>
            <td>{{ $count++ }}</td>
            <td>@php
                    $hospital = $hospitals->firstWhere('id', $item->hbid);
                @endphp
                {{ $hospital ? $hospital->hbname : 'Unknown' }}
            </td>
            <td>{{ $item->ap }}</td>
            <td>{{ $item->an }}</td>
            <td>{{ $item->bp }}</td>
            <td>{{ $item->bn }}</td>
            <td>{{ $item->abp }}</td>
            <td>{{ $item->abn }}</td>
            <td>{{ $item->op }}</td>
            <td>{{ $item->on }}</td>
            <td>{{ $item->ohp }}</td>
            <td>{{ $item->ohn }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<div class="mb-3">
    <button class="btn btn-outline-dark" onclick="generatePDF()">Download PDF</button>
</div>

<script>
function filterByDate() {
    let startDate = document.getElementById("startDate").value;
    let endDate = document.getElementById("endDate").value;

    let table = document.getElementById("inventoryTable");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td")[12]; // "Created at" column index
        if (td) {
            let createdAt = new Date(td.textContent.trim());
            let showRow = true;

            if (startDate) {
                showRow = showRow && createdAt >= new Date(startDate);
            }
            if (endDate) {
                showRow = showRow && createdAt <= new Date(endDate);
            }

            tr[i].style.display = showRow ? "" : "none";
        }
    }
}

function resetFilter() {
    document.getElementById("startDate").value = "";
    document.getElementById("endDate").value = "";

    let table = document.getElementById("inventoryTable");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        tr[i].style.display = "";
    }
}
</script>
<script>
function generatePDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    let table = document.getElementById("inventoryTable");
    let rows = [];
    let headers = [];

    // Collect headers
    let ths = table.querySelectorAll("thead th");
    ths.forEach(th => headers.push(th.innerText));

    // Collect only visible rows
    let trs = table.querySelectorAll("tbody tr");
    trs.forEach(tr => {
        if (tr.style.display !== "none") { // only rows not filtered out
            let rowData = [];
            let tds = tr.querySelectorAll("td");
            tds.forEach(td => rowData.push(td.innerText.trim()));
            rows.push(rowData);
        }
    });

    // Add title
    doc.setFontSize(14);
    doc.text("Filtered Blood Inventory Report", 14, 15);

    // Generate table
    doc.autoTable({
        head: [headers],
        body: rows,
        startY: 25,
        styles: { fontSize: 9, cellPadding: 2 },
        theme: "grid",
        headStyles: { fillColor: [211, 47, 47] } // Red header
    });

    // Save PDF
    doc.save("filtered_inventory.pdf");
}
</script>

@endsection
