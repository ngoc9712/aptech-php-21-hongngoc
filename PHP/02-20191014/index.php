<style>
    th,td{
        border : 1px solid red;
    }
</style>
<?php
    $ngoc =
     [
        ["name" => "Sam Sung S10",
        "price" => 1700,
        "currency" => "$"],
        ["name" => "Google",
        "price" => '$500',
        "currency" => "$"],
        [
         "name" => "Iphone 11",
        "price" => 1700,
        "currency" => "$"
        ],
        [
            "name" => "Oppo 7s",
            "price" => '$700',
            "currency" => "$"
        ],
        [
            "name" => "Xaomi note 7",
            "price" => '$200',
            "currency" => "$"
        ],
        [
            
            "name" => "ViVo",
            "price" => '$500',
            "currency" => "$"
        ]
     ];
       ?>
       <!DOCTYPE html>
       <html >
       <head>
       </head>
       <body>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                            <?php
                                $id=0;
                            for($i=0;$i< count($ngoc); $i++){?>
                                <tr>
                                    <td>
                                        <?php $id++ ;echo($id); ?>
                                    </td>
                                    <td>
                                        <?php echo $ngoc[$i]['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo ($ngoc[$i]['price'].'  '.$ngoc[$i]['currency']);?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
       </body>
       </html>