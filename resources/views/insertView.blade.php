<center>
    <h2>Insert Page</h2>
    <br>
    <br>

    <form action="/insertData" method="post" enctype="multipart/form-data"  >
        @csrf 
        <table>
            <tr>
                <td>Name : </td>
                <td><input type="text" placeholder="enter name"  name="name" ></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" placeholder="enter email"  name="email" ></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" placeholder="enter password"  name="password" ></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><textarea name="address" id="address" placeholder="enter address" cols="20" rows="2"  ></textarea></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <input type="radio" name="gender" value="male"  >Male <br>
                    <input type="radio" name="gender" value="female"  >Female <br>
                </td>
            </tr>
            <tr>
                <td>Date : </td>
                <td><input type="date" name="date" ></td>
            </tr>
            <tr>
                <td>Select Course : </td>
                <td>
                    <select name="course" id="course">
                        <option value="mca">Mca</option>
                        <option value="bca">Bca</option>
                        <option value="bsc">Bsc</option>
                        <option value="pgdca">Pgdca</option>
                        <option value="ml">Ml</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Choose File : </td>
                <td><input type="file" name="img" ></td>
            </tr>
            <tr>
                <td>Choose hobbies : </td>
                <td>
                    <input type="checkbox" name="hobb[]" id="hobb" value="swimming" >Swimming <br>
                    <input type="checkbox" name="hobb[]" id="hobb" value="playing" >Playing <br>
                    <input type="checkbox" name="hobb[]" id="hobb" value="reading" >Reading <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Insert" ></td>
            </tr>
        </table>
    </form>

    <br>
    <br>

    <a href="/profile">back</a>

</center>