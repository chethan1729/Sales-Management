<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("dbtest", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM add_deal ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>name</th>
          <th>organization</th>
          <th>amt</th>
          <th>email</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['contact_name']}</td>
              <td>{$row\['org_name'\]}</td>
              <td>{$row\['deal_value'\]}</td>
              <td>{$row\['org_mail'\]}</td>
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
    </body>
    </html>