<?php
    session_start();

    if (!isset($_SESSION['auth_client'])) {

        // user has not login cant access cart
        $_SESSION['message'] = "Without Login You Can't Access Profile";
        header("Location: log_reg/index.php");
       
    }else{
        $client_id = $_SESSION['auth_client']['client_id'];
    }

    include ("include/config/dbconn.php");

    $sql = "SELECT * FROM clients WHERE id =  $client_id";
    $result_set = $conn->query($sql);
    $client = $result_set->fetch_assoc();


?>

<?php  include('./include/header.php') ?>

<!--Profile Page-->

 <section id="form-details">
        <form method="post">
            <span>Profile</span>
            <h2>Update your profile here</h2>

            <label for="fname" style="margin-bottom: 5px;">First Name</label>
            <input type="text" placeholder="First Name" name="fname" value="<?php echo $client['fname']; ?>">

            <label for="lname" style="margin-bottom: 5px;">Last Name</label>
            <input type="text" placeholder="Last Name" name="lname" value="<?php echo $client['lname']; ?>">

            <label for="email" style="margin-bottom: 5px;">Email</label>
            <input type="text" placeholder="E-mail" name="email" value="<?php echo $client['email']; ?>">

            
            <label for="mobile" style="margin-bottom: 5px;">Mobile</label>
            <input type="text" placeholder="Mobile Number" name="mobile" value="<?php echo $client['mobile']; ?>">

            <label for="password" style="margin-bottom: 5px;">Password</label>
            <input type="text" placeholder="Password" value="-----------" disabled>

            <input type="hidden" name="client_id" value="<?php echo $client['id']; ?>">

            <button class="normal" type="submit" id="btnUpdateProfile">Update</button>
        </form>
        <div class="people">
                <img src="img/user.png" alt="img" width="500">
        </div>
    </section>   

     <?php include('./include/footer.php')  ?>


    <!footer-->

        <script>
        $(document).ready(function() {
    $('#btnUpdateProfile').click(function(e) {
        
        var client_id = $('input[name="client_id"]').val();
        var fname = $('input[name="fname"]').val();
        var lname = $('input[name="lname"]').val();
        var email = $('input[name="email"]').val();
        var mobile = $('input[name="mobile"]').val();

        var data = {
            client_id: client_id,
            fname: fname,
            lname: lname,
            email: email,
            mobile: mobile
        };

        $.ajax({
            type: 'POST', 
            url: 'update_profile.php', 
            data: data,
            success: function(response) {
                alert('Profile updated successfully');
            },
            error: function(error) {
                console.error('Error updating profile:', error);
            }
        });
    });
});
</script>