<?php

    $module="<_Module_Name_>";
    if(!isset($user_code))
    {
        header("Location: login.php");
    }

/*
 * Calling the topbar from template
*/
if(!isset($_POST['<_Module_Name_>Submitted']))
{
    /*
     * You header file and topbar path here
     */
    
        /*
         * Sample
         
	require_once("../templates/ams/views/header.php");
	require_once("../templates/ams/views/topbar.php");
         * 
         */
}
?>
<body>
<!-- Start of container and row fluid -->
<div class="container-fluid-full">
	<div class="row-fluid">
	<?php
	/*
	 * Place the sidebar menu here
	 */
        require_once("../templates/ams/views/menu.php");
?>
<!-- start: Content -->
<div id="content" class="span10" >
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
	<li><a href="<_Module_Name_>controller.php"><_Module_Name_></a></li>
</ul>

<?php
/*
 * 3 Types of actions in the user
 * 1.View
 * 2.Edit
 * 3.Add
 */
 
 if(isset($_REQUEST['action']))
 {
	 $action = $_REQUEST['action'];
 }
 else
 {
	 $action = 'View';
 }


 if(strcmp($action,'View')==0)
 {
	require_once("../views/<_Module_Name_>view.php");
 }
 else if(strcmp($action,'Edit')==0)
 {
	 $id = $_REQUEST['id'];
	 
	 require_once("../views/<_Module_Name_>edit.php");
 }
 else if(strcmp($action,'Add')==0)
 {
	 require_once("../views/<_Module_Name_>add.php");
 }

?>
</div>
</div>
</div>
<!-- End of container and row fluid-->
<?php

/* 
* Footer file path here

require_once("../templates/ams/views/footer.php");

 *   
 */


?>