@extends('layout')

@section('title', 'Blog by Geri')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Welcome to My Blog</h1>
                        <p class="card-text text-center">This is the homepage with information about my blog.</p>

                        <hr>

                        <section>
                            <h2>About my blog</h2>
                            <p>My blog is dedicated to providing the latest information and articles on various topics. My
                                mission is to share knowledge and experiences with my readers and with your help.</p>
                        </section>

                        <section>
                            <h2>Contact</h2>
                            <p>For any inquiries, please contact me via email <a
                                    href="mailto:edin.mujadzevic1@gmail.com">HERE!</a>.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

