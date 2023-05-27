$(document).ready(function() {
    var x =1;
    var table_parent = $('#table_variant');
    
    $("#tags_productAdd").select2();
    $("#tags_productAdd").select2({
        allowClear: true,
        templateResult: hideSelected,
    });

    $("#price_product").keyup(function(e) {
        $(this).val(format($(this).val()));
    });

    $("#price_sale_product").keyup(function(e) {
        $(this).val(format($(this).val()));
    });

    //Only number input price
    $('#price_product').keypress(function(e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });
    $('#price_sale_product').keypress(function(e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });

    $('#add_variant').click(function(e) {
        e.preventDefault();
        let html = `
            <tr>
                <th class="p-2"><button class="btn btn-danger remove_button" type="button">Hapus</button>
                </th>
                <td class="p-2" style="max-width:100px;"></td>
                <td class="p-2"><input type="text" name="stock" class="form-control"></td>
                <td class="p-2"><input type="text" name="stock" class="form-control"></td>
                <td class="p-2"><input type="text" name="stock" class="form-control"></td>
                <td class="p-2"><input type="text" name="stock" class="form-control"></td>
                <td class="p-2"><input type="text" name="stock" class="form-control"></td>
            </tr>
        `;

        x++; //Increment field counter
        $(table_parent).append(html); //Add field html
    });

    $(table_parent).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('tr').remove(); //Remove field html
        x--; //Decrement field counter
    });

});

// ================= FUNCTION IS HERE ================= //
function hideSelected(value) {
    if (value && !value.selected) {
        return $('<span>' + value.text + '</span>');
    }
}

function generateTable() {
    // creates a <table> element and a <tbody> element
    const tbl = document.createElement("table");
    const tblBody = document.createElement("tbody");

    // creating all cells
    for (let i = 0; i < 1; i++) {
        // creates a table row
        const row = document.createElement("tr");

        for (let j = 0; j < 2; j++) {
            // Create a <td> element and a text node, make the text
            // node the contents of the <td>, and put the <td> at
            // the end of the table row
            const cell = document.createElement("td");
            const cellText = document.createTextNode(`cell in row ${i}, column ${j}`);
            cell.appendChild(cellText);
            row.appendChild(cell);
        }

        // add the row to the end of the table body
        tblBody.appendChild(row);
    }

    // put the <tbody> in the <table>
    tbl.appendChild(tblBody);
    // appends <table> into <body>
    document.body.appendChild(tbl);
    // sets the border attribute of tbl to '2'
    tbl.setAttribute("border", "2");
}

var format = function(num) {
    var str = num.toString().replace("", ""),
        parts = false,
        output = [],
        i = 1,
        formatted = null;
    if (str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for (var j = 0, len = str.length; j < len; j++) {
        if (str[j] != ",") {
            output.push(str[j]);
            if (i % 3 == 0 && j < (len - 1)) {
                output.push(",");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};
