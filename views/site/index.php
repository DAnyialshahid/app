
<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('site/includes/head')?>
</head>
<body>
<?php $this->load->view('site/includes/header')?>
<?php $this->load->view('site/'.$template);?>
<?php $this->load->view('site/includes/footer')?>
</body>
</html>