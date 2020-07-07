<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="modal-body">
    <input type="button" id="hide_popup" value="Hide Popup"/>
    <div style="clear"></div>
    <table id="mytable" class="table table-bordred table-striped" border="1">
        <thead>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Pronom</th>
        <th>BU</th>
        <th>Contact</th>
        <th>Date d'ambauche</th>
        <th>RRH</th>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        </tbody>
    </table>
</div>

<table id="bodytable" class="table table-bordred table-striped" border="1">
    <thead>
    <th>Matricule</th>
    <th>Nom</th>
    <th>Pronom</th>
    <th>BU</th>
    <th>Contact</th>
    <th>Date d'ambauche</th>
    <th>RRH</th>
    <th>Detail</th>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td class="detail_td">
            <p data-placement="top" data-toggle="tooltip" title="Details">
                <button class="detail_button btn btn-primary btn-xs" data-title="Details" data-toggle="modal" data-target="#Details">   <span class="glyphicon glyphicon-text-color">Detail</span>
                </button>
            </p>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td class="detail_td">
            <p data-placement="top" data-toggle="tooltip" title="Details">
                <button class="detail_button btn btn-primary btn-xs" data-title="Details" data-toggle="modal" data-target="#Details">   <span class="glyphicon glyphicon-text-color">Detail</span>
                </button>
            </p>
        </td>
    </tr>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){

        $(".detail_button").on("click",function(){
            var parentTr = $(this).closest("tr");
            var counter = 1;
            $("td", $(parentTr)).each(function(){
                if(!($(this).hasClass("detail_td"))){
                    $(".modal-body tr td:nth-child("+counter+")").text($(this).text());
                    counter++;
                }
                $(".modal-body").show();
                $("#bodytable").hide();

            });
        });

        $("#hide_popup").on("click",function(){
            $(".modal-body").hide();
            $("#bodytable").show();
        });

    });
    </script>
<style>
    .modal-body{
        display:none;
        position:absolute;
        top:0;
        left:0px;
    }
</style>
</body>
</html>
