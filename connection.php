
<?php
session_start();
class Database
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "ecoscrapexchange";

	public function connect ()
	{
		$con = new mysqli ($this->host,$this->username,$this->password,$this->dbname);
		return $con;
	}


	//data insert function

	public function insert($name,$email,$password)
	{
		$conn = $this->connect();
		$conn->query("INSERT INTO register set name='$name',email='$email',password='$password'");
		if(mysqli_affected_rows($conn)==1)
		{
 			 return 1;
		}

		else{
			return 2;
		}
	}

	public function booking($name,$mobile,$category,$address,$date,$kg,$logid,$price)
	{
		$conn = $this->connect();
		$conn->query("INSERT INTO booking set name='$name',mobile='$mobile',category='$category',address='$address',kg='$kg',date='$date',logid='$logid',price='$price'");
		if(mysqli_affected_rows($conn)==1)
		{
 			 return 1;
		}

		else{
			return 2;
		}
	}

	public function purchase($name,$mobile,$category,$address,$item,$logid,$price)
	{
		$conn = $this->connect();
		$conn->query("INSERT INTO purchase set name='$name',mobile='$mobile',category='$category',address='$address',item='$item',logid='$logid',price='$price'");
		if(mysqli_affected_rows($conn)==1)
		{
 			 return 1;
		}

		else{
			return 2;
		}
	}


//   // select data
  public function select()
  {
  	$conn = $this->connect();
  	$result = $conn->query("select * from register");
  	return $result;
  }
 

// booking
  public function books()
  {
  	$conn = $this->connect();
  	$results = $conn->query("select * from booking");
  	return $results;
  }

  public function buys()
  {
  	$conn = $this->connect();
  	$results = $conn->query("select * from purchase");
  	return $results;
  }

 
  public function update($id)
	{
		$conn = $this->connect();
		$conn->query("UPDATE booking set status='1' where id='$id'");
		if(mysqli_affected_rows($conn)==1)
		{
 			echo "<script>alert('Data Updated Successfully!');</script>";
 			echo "<script>window.location.href='admin.php';</script>";
		}
		

		else{
			echo "<script>alert('Data Not Updated!');</script>";
		}
	}


	public function updatePurchase($id)
    {
        $conn = $this->connect();
        $conn->query("UPDATE purchase set status='1' where id='$id'");
        if (mysqli_affected_rows($conn) == 1) {
            echo "<script>alert('Data Updated Successfully!');</script>";
            echo "<script>window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Data Not Updated!');</script>";
        }
    }

	//
	public function reject($id)
	{
		$conn = $this->connect();
		$conn->query("UPDATE booking set status='2' where id='$id'");
		if(mysqli_affected_rows($conn)==1)
		{
 			echo "<script>alert('Rejected !');</script>";
 			echo "<script>window.location.href='admin.php';</script>";
		}
		

		else{
			echo "<script>alert('Data Not Updated!');</script>";
		}
	}

	public function rejectPurchase($id)
    {
        $conn = $this->connect();
        $conn->query("UPDATE purchase set status='2' where id='$id'");
        if (mysqli_affected_rows($conn) == 1) {
            echo "<script>alert('Rejected!');</script>";
            echo "<script>window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Data Not Updated!');</script>";
        }
    }

	public function Login($email,$password)
	{
 		$conn = $this->connect();
		$sql = $conn->query("select * from register where email='$email' and password='$password'");
		$datas = mysqli_fetch_assoc($sql);

		if(mysqli_num_rows($sql)==1)
		{
			if($password==$datas['password'])
			{
            $this->logid = $datas['id'];
             $_SESSION['name'] = $datas['name'];
 
                return 1;
			}

			else
			{
				return 2;
			}
		}

		else
		{
			return 3;
		}
	}

public function iduser()
{
	return $this->logid;
 }

 
 
public function log_out() {
        // Destroy and unset active session
        session_destroy();
        unset($_SESSION['id']);
        return true;
    }


    //delete
  public function delete($id)
  {
  	$conn = $this->connect();
  	$conn->query("delete from booking where id='$id'");
  	
  	if(mysqli_affected_rows($conn)==1)
		{
		// echo "<script>alert('Data Deleted Successfully!');</script>";
		echo "<script>window.location.href='admin.php';</script>";
		}
 
  }

  public function deletePurchase($id)
    {
        $conn = $this->connect();
        $conn->query("delete from purchase where id='$id'");
        if (mysqli_affected_rows($conn) == 1) {
            echo "<script>window.location.href='admin.php';</script>";
        }
    }



  public function deleteuser($id)
  {
  	$conn = $this->connect();
  	$conn->query("delete from register where id='$id'");
  	
  	if(mysqli_affected_rows($conn)==1)
		{
		// echo "<script>alert('Data Deleted Successfully!');</script>";
		echo "<script>window.location.href='admin.php';</script>";
		}
 
  }

  public function receipt($logid)
  {
  	$conn = $this->connect();
  	$receiptdata = $conn->query("select * from booking where logid='$logid' order by id desc limit 1;");
  	$data = mysqli_fetch_assoc($receiptdata);
  	return $data;
   }
   

   public function payment($logid)
  {
  	$conn = $this->connect();
  	$receiptdata = $conn->query("select * from purchase where logid='$logid' order by id desc limit 1;");
  	$data = mysqli_fetch_assoc($paymentdata);
  	return $data;
   }

   
}

$obj = new Database();

?>