<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="./assets/css/page.css">
    <header>
        <div class="headCard">
            <h1>Employee Management System</h1>
            <a href="AddEmployee.php" class="AddButton">+ Add Employee</a>
            <!-- <button onclick="AddEmployee.php">Add Student</button> -->
            <!-- <button onclick="ShowPopUp()">+ Add Employee</button> -->
            <!-- <form method="POST"> -->

            <!-- <input type="submit" name="addMore" class="AddButton" value="+ Add Employee"> -->
            <!-- </form> -->
        </div>

    </header>
    <script>
        let LocalCheck = JSON.parse(localStorage.getItem("Employees"));
        let Employees = LocalCheck ? LocalCheck : [];
    </script>
    <main>

        <div class="DataContainer"></div>

        <?php
        $CurrentEmployee = [];
        $Status = false;
        if (isset($_POST["Name"])) {
            $name = $_POST["Name"];
            $Manager = $_POST["Manager"];
            $Faculty = $_POST["Faculty"];
            $Role = $_POST["Role"];
            $Status = true;
            $CurrentEmployee = [
                "Name" => $name,
                "Manager" => $Manager,
                "Faculty" => $Faculty,
                "Role" => $Role
            ];
        }
        ?>


    </main>

</body>

<script>
    function CardGen(Data) {
        const Container = document.querySelector(".DataContainer");
        // Container.innerHTML = ""; // Clear old cards
        const Card = document.createElement('div');
        Card.classList.add("Card");
        Card.dataset.id = Data.id;

        const TopData = document.createElement('div');
        TopData.classList.add("TopData");

        const Name = document.createElement('h3');
        Name.innerText = Data.Name;
        TopData.appendChild(Name);

        const MiddleData = document.createElement('div');
        MiddleData.classList.add("MiddleData");

        const Table = document.createElement('table');


        const row2 = document.createElement('tr');
        const Role = document.createElement('td');
        Role.textContent = "Role";
        const RoleDetail = document.createElement('td');
        RoleDetail.textContent = Data.Role;
        row2.appendChild(Role);
        row2.appendChild(RoleDetail);

        const row3 = document.createElement('tr');
        const Faculty = document.createElement('td');
        Faculty.textContent = "Faculty";
        const FacultyDetail = document.createElement('td');
        FacultyDetail.textContent = Data.Faculty;
        // Address.innerHTML=`<span>`
        row3.appendChild(Faculty);
        row3.appendChild(FacultyDetail);

        const row4 = document.createElement('tr');
        const Manager = document.createElement('td');
        Manager.textContent = "Manager";
        const ManagerDetail = document.createElement('td');
        ManagerDetail.textContent = Data.Manager;
        row4.appendChild(Manager);
        row4.appendChild(ManagerDetail);

        Table.appendChild(row2);
        Table.appendChild(row3);
        Table.appendChild(row4);

        const Email = document.createElement('p');
        Email.textContent = 'Email@email.email';

        MiddleData.appendChild(Table);
        MiddleData.appendChild(Email);

        const BottomData = document.createElement('div');
        BottomData.classList.add("BottomData");
        BottomData.innerHTML = `
        <input type="button" onclick="EditForm()" value=" Edit">
        <input type="button" onclick="DeletePopUp()" value="Delete">
    `
        // const DeleteButton = document.createElement("button");
        // DeleteButton.textContent = "Delete";
        // DeleteButton.type = "button";
        // DeleteButton.addEventListener("click", () => DeleteCard(id));
        // BottomData.appendChild(DeleteButton);

        Card.appendChild(TopData);
        Card.appendChild(MiddleData);
        Card.appendChild(BottomData);
        Container.appendChild(Card);
    }

    function DisplayAll(Datas) {
        document.querySelector(".DataContainer").innerHTML = "";
        Datas.forEach(element => {
            CardGen(element);
        });
    }

    let Status = <?php echo json_encode($Status); ?>;
    let CurrentEmployee = <?php echo json_encode($CurrentEmployee); ?>;
    if (Status) {
        Employees.push(CurrentEmployee)
        localStorage.setItem("Employees", JSON.stringify(Employees))
        DisplayAll(Employees)
        console.log(Employees)
        <?php $Status = false; ?>
    }

</script>


</html>