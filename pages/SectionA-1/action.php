<?php
if(isset($_POST['action']))
{
	$file = 'data.json';
	
	if($_POST['action'] == 'Add' || $_POST['action'] == 'Edit')
	{
		$error = array();

		$data = array();

		$data['id']	= time();

		if(empty($_POST['staff_id']))
		{
			$error['staff_id_error'] = 'Staff Id is Required';
		}
		else
		{
			$data['staff_id'] = trim($_POST['staff_id']);
		}

		if(empty($_POST['staff_name']))
		{
			$error['staff_name_error'] = 'Staff Name is Required';
		}
		else
		{
			$data['staff_name'] = trim($_POST['staff_name']);
		}

		$data['grade'] = trim($_POST['grade']);

		if(empty($_POST['first_appointment']))
		{
			$error['first_appointment_error'] = 'First Appointment is required';
		}
		else
		{
			$data['first_appointment'] = trim($_POST['first_appointment']);
		}

		if(empty($_POST['current_appointment']))
		{
			$error['current_appointment_error'] = 'Current Appointmentis required';
		}
		else
		{
			$data['current_appointment'] = trim($_POST['current_appointment']);
		}

		if(empty($_POST['status']))
		{
			$error['status_error'] = 'status is required';
		}
		else
		{
			$data['status'] = trim($_POST['status']);
		}

		if(empty($_POST['status_contract']))
		{
			$error['status_contract_error'] = 'status_contract is required';
		}
		else
		{
			$data['status_contract'] = trim($_POST['status_contract']);
		}

		if(empty($_POST['status_time']))
		{
			$error['status_time_error'] = 'status_time is required';
		}
		else
		{
			$data['status_time'] = trim($_POST['status_time']);
		}

		if(empty($_POST[' ']))
		{
			$error['citizen_error'] = 'citizen is required';
		}
		else
		{
			$data['citizen'] = trim($_POST['citizen']);
		}

		if(empty($_POST['country']))
		{
			$error['country_error'] = 'country is required';
		}
		else
		{
			$data['country'] = trim($_POST['country']);
		}

		if(count($error) > 0)
		{
			$output = array(
				'error'		=>	$error
			);
		}
		else
		{
			if($_POST['action'] == 'Add')
			{
				$file_data = json_decode(file_get_contents($file), true);

				//print_r($file_data);

				$file_data[] = $data;

				file_put_contents($file, json_encode($file_data));
				$output = array(
					'success'	=>	'Data Added'
				);
			}

			if($_POST['action'] == 'Edit')
			{
				$file_data = json_decode(file_get_contents($file), true);

				$key = array_search($_POST['id'], array_column($file_data, 'id'));

				$file_data[$key]['staff_id'] = $data['staff_id'];
				$file_data[$key]['staff_name'] = $data['staff_name'];
				$file_data[$key]['grade'] = $data['grade'];
				$file_data[$key]['first_appointment'] = $data['first_appointment'];
				$file_data[$key]['current_appointment'] = $data['current_appointment'];
				$file_data[$key]['status'] = $data['status'];
				$file_data[$key]['status_contract'] = $data['status_contract'];
				$file_data[$key]['status_time'] = $data['status_time'];
				$file_data[$key]['citizen'] = $data['citizen'];
				$file_data[$key]['country'] = $data['country'];
				
				file_put_contents($file, json_encode($file_data));

				$output = array(
					'success'	=>	'Data Edited'
				);

			}
		}

		echo json_encode($output);
	}

	if($_POST['action'] == 'fetch_single')
	{
		$file_data = json_decode(file_get_contents($file), true);

		$key = array_search($_POST['id'], array_column($file_data, 'id'));

		echo json_encode($file_data[$key]);
	}

	if($_POST['action'] == 'delete')
	{
		$file_data = json_decode(file_get_contents($file), true);

		$key = array_search($_POST['id'], array_column($file_data, 'id'));

		unset($file_data[$key]);

		file_put_contents($file, json_encode($file_data));

		echo json_encode(['success' => 'Data Deleted']);
	}
}

?>
