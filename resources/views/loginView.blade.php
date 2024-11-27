<center>
    <br>
    <br>
    <h2>login Page</h2>
    <br>
    <br>
    <form action="/login" method="post">
        @csrf
        
        <input type="email"  placeholder="enter email" name="email" >
        <br>
        <br>
        <input type="password"  placeholder="enter password" name="password" >
        <br>
        <br>
        <input type="submit" value="Login" >
        <br>
        <br>
        not register ? <a href="/">register here</a>
    </form>
</center>