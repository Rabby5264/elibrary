<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM contact ORDER BY id DESC";
$result =$db->query($sql);
?>

        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contact Table</h4>
                    <p class="card-description"> Users <code>Says</code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Subject </th>
                          <th> Message </th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php while($row = $result->fetch_assoc()):   ?>

                        <tr>
                          <td><?php echo $row['id']  ;  ?></td>
                          <td><?php echo $row['name']  ;  ?> </td>
                          <td><?php echo $row['email']  ;  ?></td>
                          <td><?php echo $row['subject']  ;  ?></td>
                          <td><?php echo $row['message']  ;  ?></td>
                        </tr>
                      <?php endwhile; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<?php include 'include/footer.php'; ?>
