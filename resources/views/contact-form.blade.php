<x-app-layout>


    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @session('success')
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endsession


                <form action="{{route('contact.sendEmail')}}" method="post">
                    @csrf

                    <h3>Contact Us</h3>

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="messageContent" rows="5" required></textarea>
                        @error('messageContent')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>