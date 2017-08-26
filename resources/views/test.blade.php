<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
  <form action ="/create" method = "post">
                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <input type="text" name="userimage">
                        <br>
                        <input type="text" name="size">

                    <br>
                    <input type="submit" name="" value = "Add Image">
                    </form>
</body>
</html>