<?php
 include('db.php');
 class Motion extends DBH{

    
    
     function gallary()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM  gallery");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='
            
          <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="admin/'.$row->event_img.'" class="venobox" data-gall="gallery-item">
              <img src="admin/'.$row->event_img.'" alt="" class="img-fluid">
            </a>
          </div>
        </div>  ';
        }
        echo $display_product;

     }

     function fetch_unchecked_train_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM train where seen='false'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data_train.php?id='.$row->id.'" class="btn btn-danger ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }



     
     function fetch_checked_train_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM train where seen='true'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data_train.php?id='.$row->id.'" class="btn btn-danger ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }


























     function fetch_checked_voluntrism_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM voluntrism where seen='true'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data_vol.php?id='.$row->id.'" class="btn btn-success ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }



     function fetch_unchecked_voluntrism_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM voluntrism where seen='false'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data_vol.php?id='.$row->id.'" class="btn btn-danger ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }


     function fetch_unchecked_consulting_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM consulting where seen='false'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data.php?id='.$row->id.'" class="btn btn-danger ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }


     
     function fetch_checked_consulting_request()
     {
         $display_pp='';
         $stmt = $this->connect()->query("SELECT * FROM consulting where seen='true'  ");
         while ($row=$stmt->fetch(PDO::FETCH_OBJ))
         {
             $display_pp .='
         <tr>
                 <td>'.$row->id.'</td>
                 <td>'.$row->fullname.'</td>
                 <td>'.$row->email.'</td>
                 <td>'.$row->telephone.'</td>
                 <td>'.$row->mobile.'</td>
                 <td>'.$row->Date.'</td>
                 
                
                 <td>
               <div class="dropdown">
                <a href="view_detail_data.php?id='.$row->id.'" class="btn btn-success ">View</a>
  
  </div>
        
               </td>
             </tr>
         
         '
      ;
         }
         echo $display_pp;
     }

     function projects_home()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM projects ORDER BY id DESC LIMIT 3");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .=' <div class="icon-box">
            <div class="icon"><i class="icofont-files-stack"></i></div>
            <h4 class="title"><a href="">'.$row->projects_title.'</a></h4>
            <p class="description">'.$row->project_desc.'</p>
          </div>  ';
        }
        echo $display_product;
     }
     function projects_page()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM projects ORDER BY id DESC LIMIT 3");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='    
            <div class="content">
              <h3>'.$row->projects_title.'</h3>
              </div>
      
           <p'.$row->project_desc.'  </p>  ';
        }
        echo $display_product;
     }
     function team_members()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM team_members ");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='    <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="admin/'.$row->member_photo.'" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>'.$row->member_name.' </h4>
                <span>'.$row->member_postion.'</span>
                <p>'.$row->member_descr.' </p>
                
                
              </div>
            </div>
          </div>';
        }
        echo $display_product;
     }
     function certificate_title_active()
     {
        $display_producst="";
        $stmt = $this->connect()->query("SELECT * FROM certificate LIMIT 1");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_producst .='  <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Sample</a>
          </li>';
        }
        echo $display_producst;

     }
     function certificate_descr_active()
     {
        $display_producst="";
        $stmt = $this->connect()->query("SELECT * FROM certificate LIMIT 1");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_producst .='   
            <div class="tab-pane active show" id="tab-1">
                   <div class="row">
                     <div class="col-lg-8 details order-2 order-lg-1">
                       <h3>sample1</h3>
                       <p class="font-italic">'.$row->certficate_title.'</p>
                       <p>'.$row->certificate_desc.'</p>
                     </div>
                     <div class="col-lg-4 text-center order-1 order-lg-2">
                       <img src="admin/'.$row->certficate_image.'" alt="" class="img-fluid">
                     </div>
                   </div>
                 </div>';
        }
        echo $display_producst;

     }
     function certificate_title()
     {
        $display_producst="";
        $stmt = $this->connect()->query("SELECT * FROM certificate ORDER BY id DESC");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {

            $display_producst .=' 
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-'.$row->id.'">'.$row->certficate_title.'</a>
          </li>';
        }
        echo $display_producst;

     }
     function certification_descr()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM certificate ");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='      <div class="tab-pane" id="tab-'.$row->id.'">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>sample1</h3>
                <p class="font-italic">'.$row->certficate_title.'</p>
                <p>'.$row->certificate_desc.'</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="admin/'.$row->certficate_image.'" alt="" class="img-fluid">
              </div>
            </div>
          </div> ';
        }
        echo $display_product;
      
     }

     function news()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM news");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='
            <div class="news-item">
             
              <h3>'.$row->news_title.'</h3>
              <h4>Register for new motion motivational trainings</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                '.$row->news_descr.'  </p>
            </div>  ';
        }
        echo $display_product;
     }

function news_page()
{
   
    $display_product="";
    $stmt = $this->connect()->query("SELECT * FROM news");
    while ($row=$stmt->fetch(PDO::FETCH_OBJ))
    {
 
        $display_product .='   <div class="content">
        <h2>'.$row->news_title.'</h2>
     
      </div>
    
    <p>'.$row->news_descr.' </p> ';
    }
    echo $display_product;
   
 
}


     function faq()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM faq");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='
            <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">'.$row->faq_title.' <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
              <p>
              '.$row->faq_descr.'  </p>
            </div>
          </li>  ';
        }
        echo $display_product;
     }

     function values()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM value where type=''");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='  <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div style="margin-top: 10%;" class="icon-box">
             
              <h4>'.$row->title.'</h4>
              <p>'.$row->descr.'</p>
              
            </div>
          </div>
        
 ';
        }
        echo $display_product;
     }
     
     function values_strategy()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM value where type='bold'");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .=' <div class="col-lg-6 d-flex align-items-stretch">
            <div   class="content">
              <h3>'.$row->title.'</h3>
                 <ul>
                '.$row->descr.'  
              
                </ul>
             
            </div>
          </div>
        
 ';
        }
        echo $display_product;
     }


     function downloadable_files()
     {
        $display_product="";
        $stmt = $this->connect()->query("SELECT * FROM files");
        while ($row=$stmt->fetch(PDO::FETCH_OBJ))
        {
     
            $display_product .='<div class="col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                <a href="admin/'.$row->file_src.'" download><i class="icofont-download"></i></a></div>
              <h4><a href="">'.$row->file_name.'</a></h4>
              <p>'.$row->file_descr.'</p>
         
             
            </div>
          </div> ';
        }
        echo $display_product;
     }





     function  new_feed_back($name,$email,$phone,$message,$date)
     {
        $add_prod_stmt= $this->connect()->prepare("INSERT into  feedback(feed_back_name,feed_back_email,feed_back_phone,feed_back_message,Date)values(:feed_back_name,:feed_back_email,:feed_back_phone,:feed_back_message,:Date)");
        $add_prod_stmt->execute(['feed_back_name' => $name , 'feed_back_email' => $email,'feed_back_phone'=>$phone,'feed_back_message'=>$message,'Date' => $date]);
      header("location:index.php");
      
     }
     function  add_new_con($con_fname,$con_email,$con_tele,$con_mobile,$con_services,$con_detail,$date)

     {
        $add_prod_stmt= $this->connect()->prepare("INSERT into  consulting(fullname,email,telephone,mobile,description,other_detail,seen,Date)values(:fullname,:email,:telephone,:mobile,:description,:other_detail,:seen,:Date)");
        $add_prod_stmt->execute(['fullname' => $con_fname , 'email' => $con_email,'telephone'=>$con_tele,'mobile'=>$con_mobile,'description'=>$con_services,'other_detail' => $con_detail,'seen'=>'false','Date' => $date]);
      header("location:index.php");
      
     }

     function  add_new_train($train_fname,$train_email,$train_tele,$train_mobile,$train_type,$train_payment_type,$train_location,$file_path,$train_explain,$date)
 
     {
        $add_prod_stmt= $this->connect()->prepare("INSERT into  train(fullname,email,telephone,mobile,train_package,train_location,payment_method,advance_paper,explanation,seen,Date)values(:fullname,:email,:telephone,:mobile,:train_package,:train_location,:payment_method,:advance_paper,:explanation,:seen,:Date)");
        $add_prod_stmt->execute(['fullname' => $train_fname , 'email' => $train_email,'telephone'=>$train_tele,'mobile'=>$train_mobile,'train_package'=>$train_type,'payment_method'=>$train_payment_type,'train_location'=>$train_location,'train_location'=>$train_location,'advance_paper' => $file_path,'advance_paper' => $file_path,'explanation' => $train_explain,'seen'=>'false','Date' => $date]);
      header("location:index.php");
      
     }
    
     function add_new_vol($vol_fname,$vol_email,$vol_tele,$vol_mobile,$vol_type,$vol_explain,$date)
     {
      $add_prod_stmt= $this->connect()->prepare("INSERT into  voluntrism(fullname,email,telephone,mobile,area,explation,seen,Date)values(:fullname,:email,:telephone,:mobile,:area,:explation,:seen,:Date)");
      $add_prod_stmt->execute(['fullname' => $vol_fname , 'email' => $vol_email,'telephone'=>$vol_tele,'mobile'=>$vol_mobile,'area'=>$vol_type,'explation'=>$vol_explain,'seen'=>'false','Date' => $date]);
   // header("location:index.php");
     }

}