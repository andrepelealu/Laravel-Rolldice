<h1>Player {{$jumlah}}</h1>
<?php      
 
  if(isset($_POST['simpan'])){  
    $nama= $_POST['nama'];
    $key = $_POST['key'];
    $min = 1;
    $max = 6;
    $skor = [];
    $totalscore=[];
    $convert=array();
    $test=array(1,2,3,4,5);
    
    
    for($i=0; $i<$key; $i++){
        $skor = 0;
        for($y=1; $y <= 5; $y++){
            $roll = rand($min, $max);

            if($roll == 1 || $roll == 3 || $roll == 5){
                $point=5;
                $skor +=5;
            }else{
                $point=-3;
                $skor-=3;
            }
        

            echo 'Nama Pemain:  '.$player= $nama[$i].'</br>Roll ke '.$y.'</br>Result: '.$roll.'</br> Point:'. $point.'</br></br>' ;

        }
        echo '<b>Nama Pemain: '.$nama[$i].'</b> </br><b>Total Point: '.$skor.'</b></br></br>';
        $totalscore[$i] = $skor;
    }
    echo '<b>Point Tertinggi:'.max($totalscore).'</b></br>';
    }
    
    for ($x = 1; $x <= $jumlah; $x++) 
        {
            echo '
            <form action="" method="post">
            <input type = "hidden" name = "_token" value = '.csrf_token().'    >
          
              Nama Pemain ke-'.$x.':
            <input type="text" name="nama[]"> <br/>
            ';    
        }
        echo '
        <input type="hidden" name="key" value ='.$jumlah.'>
        <input type="submit" value="Simpan" name="simpan">
        </form>';     
?>
