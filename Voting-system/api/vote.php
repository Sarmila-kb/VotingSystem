<?php
session_start();
include('connect.php');
$votes S POST['gvotes'];
$total_votes = $votes+1;
$gid = $_POST['gid'];
Suid $_SESSION['userdata']['id'];
Supdate_votes mysqli_query($connect, "UPDATE user SET votes. $total_votes' WHERE id='$gid' ");
Supdate_user_status = mysqli_query($connect, "UPDATE user SET status-1 WHERE id='Suid'");
if($update_votes and Supdate_user_status)
{
$groups mysqli_query($connect, "SELECT FROM user WHERE role-2");
$groupsdata mysqli_fetch_all($groups, MYSQLI_ASSOC);
$_SESSION['userdata']['status'] = 1;
$_SESSION['groupsdata'] $groupsdata;
}
echo '
<script>
alert("Voting successful!");
window.location."../routes/dashboard.php";
</script>
';
else{

    echo '
    <script>
    alert("Some error occurred!");
    window.location."../routes/dashboard.php";
    </script>
    ';
    }
?>