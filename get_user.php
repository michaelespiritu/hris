<?php require('core/init.php'); ?>

<?php
//Create User Object
$user = new User;
$q = intval($_GET['q']);

$data = $user->getProfileSearch($q);
$iom = $user->getSearchedEmergencyContact($q);
echo $output = '<div class="well">
            <h3>Personal Information</h3>
            <table style="width:100%;border-collapse: collapse;">
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Employee ID</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$data->employee_id.'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Date Hired ID</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.formatDate($data->join_date).'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Name</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$data->last_name.', '.$data->first_name.'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Email</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$data->email.'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Contact Number</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$data->contact_number.'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Address</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$data->address.'</td>
                </tr>
            </table>
            <br>

            <h3>In Case of Emergency Information</h3>
            <table style="width:100%;border-collapse: collapse;">
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Name</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$iom->last_name.', '.$iom->first_name.'</td>
                </tr> 
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Relationship</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$iom->relationship.'</td>
                </tr>
                <tr>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;"><strong>Contact Number</strong></td>
                    <td style="width:50%;border:1px dotted #666666;padding:15px;">'.$iom->contact_number.'</td>
                </tr>
            </table>
        </div>';