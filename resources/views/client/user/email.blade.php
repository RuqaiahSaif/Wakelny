
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/client/css/main.css">

</head>

<body style="background-color:#FFFFFF ">
    <section class="ftco-section">
        <div class="container  ">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5 border shadow-sm my-5">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form method="POST" action="/forget-password" class="login-form">
                                        @csrf
                                

                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">E-Mail Address</label>
                                <div class="input-group input-group-merge">
                                    <input style="height: 38px;" type="email" class="form-control" id="email" type="email"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus />

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    
                            <button class="wak_btn d-grid w-100"> Send Password Reset Link
                            </button>
                            {{ csrf_field() }}

                        </form>
                              



                                
                          
                          
                        </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>

