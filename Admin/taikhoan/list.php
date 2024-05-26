<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">Tài khoản</p>
          <a href="index.php?act=addtk"><button>Thêm tài khoản</button></a>
        </div>
        <section class="detail">
            <h4>Danh mục tài khoản</h4>
            <section class="detail-item">
                <table >
                    <tr>
                      <td>#</td>
                      <td>Tên user</td>
                      <td>pass</td>
                      <td>Email</td>
                      <td>SDT</td>
                      <td>Rose</td>
                      <td>Chức năng</td>
                    </tr>
                  <?php
                  $i=0;
                    foreach($listuser as $user){
                      extract($user);
                      $i+=1;
                      $suauser='index.php?act=suatk&iduser='.$id;
                      $xoauser='index.php?act=delete_tk&iduser='.$id;
                      echo'<tr>
                      <td>'.$id.'</td>
                      <td>'.$username.'</td> 
                      <td>'.$pass.'</td> 
                      <td>'.$email.'</td> 
                      <td>'.$sdt.'</td> 
                      <td>'.$role.'</td>          
                      <td>
                        <a href="'.$suauser.'"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="'.$xoauser.'"><i class="fa-solid fa-trash"></i></a>
                      </td>
                    </tr>';
                    }
                  
                  ?>  
                </table>
                
            </section>
        </section>
        <div class="main-cards">