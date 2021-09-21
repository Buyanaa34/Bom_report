@extends('layouts.app')

@section('content')
<style>
    thead input {
        width: 100%;
    }
</style>
<div class="table_container">
    <h1 class="headerz">bom reports</h1>
    <div class="button_holders">
        <button onclick="btnclick('btn1')" class="btnz">BUTTON_1</button>
        <button onclick="btnclick('btn2')" class="btnz">BUTTON_2</button>
        <button onclick="btnclick('btn3')" class="btnz">BUTTON_3</button>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                {{-- GARCHIG---G JS-EER OLGOH --}}
                <script>
                    let array_1 = ["Acq","Time","Pan","Termclass","Trace","Approval","RRN","Amount","NETC fee","Iss fee","Settlement amount"]
                    array_1.forEach(element => {
                        document.write("<th>"+element+"</th>")
                    });
                </script>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr >
                <td>VALUE1</td>
                <td>VALUE2</td>
                <td>VALUE3</td>
                <td>VALUE4</td>
                <td>VALUE5</td>
                <td>VALUE6</td>
                <td>VALUE7</td>
                <td>VALUE8</td>
                <td>VALUE9</td>
                <td>VALUE10</td>
                <td>VALUE11</td>
            </tr>
            <tr >
                <td>VAL1</td>
                <td>VAL2</td>
                <td>VALE3</td>
                <td>VALUE4</td>
                <td>VALUE5</td>
                <td>VALUE6</td>
                <td>VALUE7</td>
                <td>VALUE8</td>
                <td>VALUE9</td>
                <td>VALUE10</td>
                <td>VALUE11</td>
            </tr>
            <tr>
                <td>VALUE1</td>
                <td>VALUE2</td>
                <td>VALUE3</td>
                <td>VALUE4</td>
                <td>VALUE5</td>
                <td>VALUE6</td>
                <td>VALUE7</td>
                <td>VALUE8</td>
                <td>VALUE9</td>
                <td>VALUE10</td>
                <td>VALUE11</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                {{-- GARCHIG---G JS-EER OLGOH --}}
                <script>
                    let array = ["Acq","Time","Pan","Termclass","Trace","Approval","RRN","Amount","NETC fee","Iss fee","Settlement amount"]
                    array.forEach(element => {
                        document.write("<th>"+element+"</th>")
                    });
                </script>
            </tr>
        </tfoot>
    </table>
</div>
    


<script>
    var btnclick= (whichbtn)=>{
        switch (whichbtn) {
            case "btn1":
                window.alert("btn1 clicked");
                break;
            case "btn2":
                window.alert("btn2 clicked");
                break;
            case "btn3":
                window.alert("btn3 clicked");
                break;
            default:
                break;
        }
    }
</script>












<script>
$(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
</script>
@endsection

