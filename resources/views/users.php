<script src="{{asset('/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function() {

            $.ajax({
                url: "api/users",
                type: "GET",
                dataType: "json",

                success: function (data) {
                    alert(data);
                    $('#example').dataTable({
                        "data": data.rows,
                        "columns": data.columns,
                    });
                    }
             });
        });

<table id ="example" class="table table-striped table-bordered">
            <tr><thead>column1</thead></tr>
            <tbody></tbody>

        </table>