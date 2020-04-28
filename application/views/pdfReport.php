<html>
    <head>
        <title>PDF Report</title>
        <style>
            table{
                font-family:sans-serif;
                border-collapse:collapse;
                width:100%;
            }
            td,th{
                border:1px solid #dddddd;
                padding:8px;
                text-align:left;
            }
            tr:nth child(even){
                background-color:#dddddd;
            }
            h3{
                text-align:center;
            }
            p,h3{
                padding:10px;
            }
        </style>
    <body>
        <h3> Student Details</h3>
        <p>Student Name : <?php echo $result['sname'];?></p>
        <table>
            <thead>
                <tr>
                   <!-- <th>Em</th>-->
                   <th>Sid</th>
                    <th>Student name</th>
                    <th>Stream</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $result['sid'];?></td>
                    <td><?php echo $result['sname'];?></td>
                    <td><?php echo $result['stream'];?></td>
                    <td><?php echo $result['mob'];?></td>
                </tr>
            </tbody>
        </table>
    </body>
<html>