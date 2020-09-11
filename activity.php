<?php 
require_once "./app/config.php"; 
require_once "./login-check.php";

$datas = $database->select("ACTIVITY", "*", ["phone" => $_GET["ph"]]);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php include "./views/shared/page-spinner.php"; ?>
    <div class="wrapper">
        <?php include "./views/shared/side-bar.php"; ?>
        <div class="page-wrapper">
            <?php include "./views/shared/header.php"; ?>
            <div class="content-wrapper">
                <div class="content">
                    <!--//////////////////////////////////////////////// -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <table id="data-table" class="table display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Phone</th>
                                                <th>Amount Entered</th>
                                                <th>Last Seen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($datas as $data){ ?>
                                            <tr>
                                                <td>
                                                    <?=$data["id"]?>
                                                </td>
                                                <td>
                                                    <?=$data["phone"]?>
                                                </td>
                                                <td>
                                                    <?=$data["amount"]?>
                                                </td>
                                                <td>
                                                    <?=date_format(date_create($data["createdAt"]), "M d h:m a")?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//////////////////////////////////////////////// -->
                </div>
                <?php include "./views/shared/right-bar.php"; ?>
            </div>
        </div>
        <?php include "./views/shared/footer.php"; ?>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>
</body>

</html>