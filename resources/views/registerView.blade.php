<center>
    <br>
    <br>
    <h2>Register Page</h2>
    <br>
    <br>
    <form action="/register" method="post">
        @csrf
        <input type="text" placeholder="enter name" name="name" >
        <br>
        <br>
        <input type="email"  placeholder="enter email" name="email" >
        <br>
        <br>
        <input type="password"  placeholder="enter password" name="password" >
        <br>
        <br>
        <input type="submit" value="Register" >
        <br>
        <br>
        already register ? <a href="/login">login here</a>
    </form>
</center>