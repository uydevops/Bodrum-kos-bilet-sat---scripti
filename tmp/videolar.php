<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php';?>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid content-header">
    <div class="container ">
         <div class="sayfalama">
            <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
            <a title="Medya" href="javascript:(void)0">Medya<i class="fa fa-angle-right"></i></a>
            <span>VİDEOLAR</span>
        </div>
    </div>
</div>
<div class="container-fluid ortaalan anadiv iletisimformu">
    <div class="container">
        <h1>Videolar</h1>
        <div class="col-12 anadiv no-pad">
            <div class="line"></div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore nam sequi ex repudiandae ea cumque nesciunt doloremque rem nisi fugiat velit facilis quia assumenda provident quam soluta saepe repellendus vitae obcaecati, corporis consectetur eaque. Tempora, nemo eum libero laboriosam minus consequatur ad quasi sint quo iste consequuntur ipsam excepturi deleniti officia qui repellat.</p>
        <div class="col-xs-12 anadiv">
            <?php 
            //Get videos from channel by YouTube Data API

            $myApiKey="AIzaSyCNisNkKMQSCCuuK0YBzAJvxgnb2EkdQ70"; // Provide your API Key
            $myChannelID="UCuyJQGVStmlBgbq5JDAV6zQ"; // Provide your Channel ID
            $maxResults="50"; // Number of results to display
             
            // Make an API call to store list of videos to JSON variable
            $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults";

            function url_get_contents ($Url) {
                if (!function_exists('curl_init')){ 
                    die('CURL is not installed!');
                }
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $Url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $output = curl_exec($ch);
                curl_close($ch);
                return $output;
            }

            $videoList = url_get_contents($myQuery);

            // Convert JSON to PHP Array
            $decoded = json_decode($videoList, true);
            
            // Run a loop to display list of videos
            foreach ($decoded['items'] as $items)
            {
            $id = $items['id']['videoId'];
            $title2= mb_convert_case(substr($items['snippet']['title'],0,80),MB_CASE_TITLE,"UTF-8");
            $description = $items['snippet']['description'];
            $thumbnail = $items['snippet']['thumbnails']['default']['url'];

                //Embed video
                if (isset($id)) {
                    echo '<div class="col-12 col-sm-12 col-md-6 col-lg-4 blog-box2">
                   <div class="lokasyon">
                    <figure class="video">
                        <iframe class="width100" height="200" src="https://www.youtube.com/embed/'.$id.'" style="border:0" allowfullscreen></iframe> 
                    </figure>
                            <span class="videoh3">'. $title2 .'</span>
                            <a title="Özel Adana Ortadoğu Hastanesi Youtube" class="videoplay" href="https://www.youtube.com/watch?v='.$id.'" target="_blank">İzleyin</a>
                             </div>
                        </div>'; 

            } 


             }?>
        </div> 
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>