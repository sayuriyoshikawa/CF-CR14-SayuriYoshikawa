<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once  '../components/boot_css.php' ?>
    <title> Insert information</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Add information</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Loaction name</th>
                    <td><input class='form-control' type="text" name="locationName" placeholder="Place"/></td>
                </tr>
                <tr>
                    <th>Continent</th>
                    <td>
                        <select class="form-select" aria-label="Select Continent" name="continent">
                            <option selected>Continent</option>
                            <option value="Europe">Europe</option>
                            <option value="Africa">Africa</option>
                            <option value="North America">North America</option>
                            <option value="South America">South America</option>
                            <option value="Asia">Asia</option>
                            <option value="Australia">Australia</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price" placeholder="Price" step="any" /></td>
                </tr>
                <tr>
                    <th>duration</th>
                    <td><input class='form-control' type="text" name="duration" placeholder="Duration" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="text" name="latitude" placeholder="Latitude" /></td>
                </tr>
                <tr>
                    <th>longitude</th>
                    <td><input class='form-control' type="text" name="longitude" placeholder="Longitude" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><textarea class="form-control" type="text" name="description" placeholder="Description" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <button class='btn btn-success' type="submit"> Insert Product</button>
                    </td>
                    <td>
                        <a href="../index.php">
                            <button class='btn btn-warning' type="button"> Home </button>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>