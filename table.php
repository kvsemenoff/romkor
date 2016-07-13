<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Победители</title>

	<?php require_once('includes/header.php'); ?>
	<?php require_once('includes/header_top.php'); ?>
	<section class="header-bottom">
		<div class="container">
			<div class="votpusk"><img src="img/votpusk.png" alt=""></div>
			<div class="rline"></div>
			<h1>Призы</h1>
		</div>
	</section>
	<table id="example" class="hz-table table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>eSupport Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Eedinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Queinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quienn</td>
                    <td>Flynn</td>
                    <td>Supeport Lead</td>
                    <td>Edeinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>eSupport Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Eedinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Queinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quienn</td>
                    <td>Flynn</td>
                    <td>Supeport Lead</td>
                    <td>Edeinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                    <td>Quienn</td>
                    <td>Flynn</td>
                    <td>Supeport Lead</td>
                    <td>Edeinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>9497</td>
                    <td>q.flynn@datatables.net</td>
                </tr>
            </tbody>
        </table>
	<?php require_once('includes/footer.php'); ?>
	<script>
        $(document).ready(function() {
            $('#example').dataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>