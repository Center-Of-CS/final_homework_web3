<?php
    $row = [];
    if(!empty($_GET['edit'])){
        require_once("app/contact.php");
        $obj        = new contact();
        $row        = $obj->search_contract($_GET['edit']);
    }

    if(isset($_POST['edit_id'])){
        require_once("app/contact.php");
        $obj        = new contact();
        $obj->edit_contract($_POST['frm'],$_POST['edit_id']);
        $row        = $obj->search_contract($_POST['edit_id']);
    }

?>

<div class="content">
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon"><i class="pe-7s-note2"></i></div>

        <div class="header-title">
            <h1 class="bfont"> ویرایش اکانت   </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"> خانه  </a></li>
                <li class="active">ویرایش اکانت  </li>
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->

    <div class="row">

        <div class="col-sm-12 col-md-12">
            <div class="panel panel-inverse lobidisable">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h5 class="bfont"  > این صفحه برای ویرایش  اکانت جدید است </h5>
                    </div>
                </div>

                <div class="panel-body">
                    <br />

                    <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="">

                        <input type="hidden" name="edit_id" value="<?php if(isset($row->id)) echo $row->id ?>">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">   نام کامل     <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="text" value="<?php if(isset($row->name)) echo $row->name ?>" name="frm[name]" required="required" class="form-control cfont" placeholder="">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">   نام پدر      <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="text" value="<?php if(isset($row->fname)) echo $row->fname ?>" name="frm[fname]" required="required" class="form-control cfont" placeholder="">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">   ایمیل آدرس     <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="email" value="<?php if(isset($row->email)) echo $row->email ?>" name="frm[email]" required="required" class="form-control cfont" placeholder="">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">   شماره تماس   <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="text" value="<?php if(isset($row->phone)) echo $row->phone ?>" name="frm[phone]" required="required" class="form-control cfont" placeholder="">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">  آدرس    <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="text" value="<?php if(isset($row->address)) echo $row->address ?>" name="frm[address]" required="required" class="form-control cfont" placeholder="">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="date"> تاریخ  ویرایش <span class="required">*</span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <input type="text" id="date" value="<?php if(isset($row->date)) echo $row->date ?>" name="frm[date]" required="required" class="form-control date" >
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="note"> نوت <span class=""></span></label>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                <textarea id="note" name="frm[note]" class="form-control" rows="5" style="width:100%;height:40%;overflow-x:auto;" placeholder=""><?php if(isset($row->note)) echo $row->note ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-inverse w-md m-b-5 bfont" name = "submit"> &nbsp;<i class="fa fa-clone"> </i>&nbsp;&nbsp; ویرایش کردن  &nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div><!-- end main content   -->
</div> <!-- /.main content -->