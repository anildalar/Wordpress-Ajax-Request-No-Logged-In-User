<?php 
    /**
     * @package OKLABS
     */
    /*
    Plugin Name: OKLABS Anti-Spam
    Plugin URI: https://OKLABS.com/
    Description: Used by millions, OKLABS is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the OKLABS plugin and then go to your OKLABS Settings page to set up your API key.
    Version: 1.0.0
    Author: OKLABS
    Author URI: https://oklabs.in
    License: GPLv2 or later
    Text Domain: OKLABS
    */

    /**
 * Register the "book" custom post type
 */
        add_action('wp_head', 'myplugin_ajaxurl');

        function myplugin_ajaxurl() {

        echo '<script type="text/javascript">
                var ajaxurl = "' . admin_url('admin-ajax.php') . '";
                </script>';
        }

    //add_shortcode( string $tag, callable $callback )
    add_shortcode( 'myshortcode', function(){
        ob_start();
        ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <form class="myform">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <script>
                    (function(){
                        //alert('ok');
                        $('form.myform').submit(function(e){
                            //alert('OKOKOKOKOK');
                            e.preventDefault();
                            var d = {
                                action:'front-end-action',
                                email:$('input[type="email"]').val(),
                                pass:$('input[type="password"]').val(),
                            }
                            $.ajax({
                                url:ajaxurl,
                                type:"GET",
                                data:d,
                                success:function(result,status,xhr){
                                    console.log('OKOKOKOKKO');
                                }
                            });
                        })
                    })(jQuery);
                </script>
        <?php
        return ob_get_clean();
    } );

    add_action('wp_ajax_nopriv_front-end-action', 'server_function');
    function server_function(){
        //validate a nonce, and other $_POST data elements and execute some code.
        wp_json_send('OKLABS '.$data); //use wp_json_send to return some data to the client.
        wp_die(); //use wp_die() once you have completed your execution.
    }
?>