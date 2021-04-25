
<?php 

if(isset($_GET['deleted'])){
 
    require_once "app/contact.php";
    $obj = new contact();
    ($obj->delete_contract($_GET['id'])) ;
}


?>



<div class="content">

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="header-icon"><i class="pe-7s-note2"></i></div>

    <div class="header-title">
        <h1 class="bfont">  لیست مخاطبین   </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">خانه </a></li>
            <li class="active">لیست  مخاطبین</li>
        </ol>
    </div>
</div> <!-- /. Content Header (Page header) -->

<!-- start table  -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidisable">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4 class="bfont" >    جدول نمایش مخاطبین   </h4>
                </div>
            </div>

            <div class="">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">شماره</th>
                            <th class="text-center"> نام کامل  </th>
                            <th class="text-center">نام پدر  </th>
                            <th class="text-center">ایمیل </th>
                            <th class="text-center">شماره تماس  </th>
                            <th class="text-center">آدرسی </th>
                            <th class="text-center">تاریخ ثبت  </th>
                            <th class="text-center">نوت </th>
                            <th class="text-center">عملیات </th>
                        </tr>
                        </thead>
                        <tbody id="ContactList">
                                <tr>
                                    <td colspan='12' class='alert alert-danger' > در حال گرفتن دیتاه میباشد   </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">

    var tr = '';
function test (){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET",'ajax.php');
    ourRequest.onload = function (){
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(ourData);
        var count = 1;
        for (row of ourData) {
            tr += `
                <tr class="active bfont">
                    <td class ="text-center">${count++}</td>
                    <td class ="text-center">${row.name}</td>
                    <td class ="text-center">${row.fname}</td>
                    <td class ="text-center">${row.email}</td>
                    <td class ="text-center">${row.phone}</td>
                    <td class ="text-center">${row.address}</td>
                    <td class ="text-center">${row.date}</td>
                    <td class ="text-center">${row.note}</td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm" href="edit_category.php?id='.base64_encode($row['id']).'" ><i class="fa  fa-edit"></i></a>
                        
                        <a class="btn btn-danger btn-sm deleted" href="main.php?page=listContact&deleted=1&id=${row.id}" ><i class="fa  fa-trash-o"></i></a>
                    </td>
                </tr>
            `;
        }
    }
    ourRequest.send();
}

test();

</script>