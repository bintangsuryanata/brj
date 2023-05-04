<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2  hidden bg-gray-100 bg-no-repeat bg-cover relative items-center">
            <img class="w-[565px] mx-20 -mt-20" src="https://media.discordapp.net/attachments/963226363362422794/1049184117943717888/programmer-concept-idea-coding-testing-writing-program-using-internet-different-software-website-development-optimization-isolated-vector-illustration_613284-2459-removebg-preview.png"/>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #FFF;">
            <div class="absolute lg:hidden z-10 inset-0 bg-black bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1614741118887-7a4ee193a5fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80);">
                <div class="absolute bg-white opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-5">
                    <img class="w-96 mx-auto" src="https://media.discordapp.net/attachments/963226363362422794/1049180572884422736/teslogoh__1_-removebg-preview_1.png" alt="" srcset="">
                </h1>
                <div class="text-black">
                <?= validation_errors(); ?>
                </div>
                <form action="<?= base_url('user/login') ?>" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" method="post">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Username
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Username" name="username" type="username" placeholder="Username">
                          <?php echo form_error('username') ?>
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Password
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Password" name="password" type="password" placeholder="******">
                        </div>
                      </div>
                      <div class="text-black">
                    <?= $this->session->flashdata('gagal_login'); ?>
                    </div>
                    <div class="text-right opacity-90 text-gray-500 hover:underline hover:text-black mt-5">
                        <a href="<?php echo site_url('user/daftar')?>">Don't have an account yet? Sign Up!!!</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button type="submit" class="uppercase block w-full p-4 text-lg rounded-full bg-[#42C2FF] hover:bg-indigo-900 focus:outline-none mt-7">sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>