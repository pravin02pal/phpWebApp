<p><a href="<?php echo site_url('/user/create'); ?>">Add User</a></p>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($users as $user) {
        echo'<tr>';
            echo'<td>'. $user['id']."</td>";
            echo'<td>'. $user['first_name']."</td>";
            echo'<td>'. $user['last_name'].'</td>';
            echo'<td>'. $user['email'].'</td>';
            echo'<td><a href=/user/edit/'.$user['id'].'>Edit</a>'.'</td>';
        echo'<tr>';
    }
    ?>
  </tbody>
</table>