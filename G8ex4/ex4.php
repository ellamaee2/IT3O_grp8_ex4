<?php

$teamMembers = [
    [
        'name' => 'Ella Mae Vocal',
        'position' => 'Team Leader/Debugger',
        'description' => 'Her leadership style is characterized by empathy, clear communication, and a strong commitment to achieving goals while fostering a positive and collaborative environment. Ella Mae’s dedication to continuous improvement and her unwavering support for her team make her not only a respected leader but also a mentor who drives others to excel.',
        'description2' => '"Your Future is Created by What You Do Today."',
        'image' => 'ella.jpg',
        'profileLink' => 'https://www.facebook.com/shellamae.voczgeroleo',
        'githubLink' => 'https://github.com/ellamaee2',
        'socialIcons' => [
            'facebook' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s',
            'github' => 'https://seeklogo.com/images/G/github-logo-7880D80B8D-seeklogo.com.png'
        ]
    ],
    [
        'name' => 'Flaviano Ranises',
        'position' => 'Co-Leader/Frontend Designer',
        'description' => 'Flaviano Ranises is a remarkable co-leader known for his ability to work harmoniously alongside others. He is a strategic thinker who excels in collaboration, always ready to offer support, share ideas, and listen to the perspectives of his peers.',
        'description2' => '"Dream Big, Work Hard, Achieve Greatness."',
        'image' => 'flava.jpg',
        'profileLink' => 'https://www.facebook.com/collideddddd',
        'githubLink' => 'https://github.com/Whatsyourflava',
        'socialIcons' => [
            'facebook' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s",
            'github' => 'https://seeklogo.com/images/G/github-logo-7880D80B8D-seeklogo.com.png'
        ]
    ],
    [
        'name' => 'Malcolm Collamar',
        'position' => 'Web Designer',
        'description' => 'Malcolm Collamar is an exceptional system designer known for his creativity and technical expertise. He has a keen eye for detail and a strong ability to turn complex requirements into intuitive and efficient designs. Malcolm’s approach to system design is both innovative and user-focused',
        'description2' => '"Stay Focused, Stay Determined, Stay Strong."',
        'image' => 'malcolm.jpg',
        'profileLink' => 'https://www.facebook.com/malcolm.collamar.90',
        'githubLink' => 'https://github.com/Malcolmmc20',
        'socialIcons' => [
            'facebook' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s",
            'github' => 'https://seeklogo.com/images/G/github-logo-7880D80B8D-seeklogo.com.png'
        ]
    ],
    [
        'name' => 'Patrick Collado',
        'position' => 'Programmer',
        'description' => 'Patrick Collado is an accomplished programmer recognized for his strong coding skills and problem-solving abilities. He is highly proficient in various programming languages and consistently delivers clean, efficient, and reliable code. Patrick’s analytical mindset allows him to tackle complex challenges with ease, and his commitment to writing quality software ensures that the projects he works on are robust and scalable',
        'description2' => '"Sic Parvis Magna."',
        'image' => 'https://scontent.fmnl8-6.fna.fbcdn.net/v/t1.15752-9/457261547_530556049527972_5399249386627073900_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeH8-wQURYE5EPGlEVX3Dks5p1kEx7neJwunWQTHud4nCzHkKMyWGfqMjYHcRaxzNz95hMpZ1aKOC1JI0e9pxodN&_nc_ohc=o18uQGIsLRQQ7kNvgH2_LO3&_nc_ht=scontent.fmnl8-6.fna&oh=03_Q7cD1QF5KqqQjhD9AG6StCQw48rtMOyTP6FoZxqSE0DX49uz7Q&oe=66F7E27D',
        'profileLink' => 'https://www.facebook.com/patrick.collado.12',
        'githubLink' => 'https://github.com/ASHBOURNE007',
        'socialIcons' => [
            'facebook' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s",
            'github' => 'https://seeklogo.com/images/G/github-logo-7880D80B8D-seeklogo.com.png'
        ]
    ],
    [
        'name' => 'John Bert Eva',
        'position' => 'Quality Analyst',
        'description' => 'John Bert Eva is an excellent quality analyst known for his meticulous attention to detail and commitment to ensuring high standards. He excels at identifying potential issues and implementing effective solutions, ensuring that products meet or exceed quality expectations. John Bert s analytical skills and thorough understanding of testing methodologies make him adept at maintaining the integrity and performance of systems',
        'description2' => '"Challenge Yourself to Be Better Every Day."',
        'image' => 'eva.jfif',
        'profileLink' => 'https://www.facebook.com/johnbert.eva.7',
        'githubLink' => 'https://github.com/Eva2-ai',
        'socialIcons' => [
            'facebook' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s",
            'github' => 'https://seeklogo.com/images/G/github-logo-7880D80B8D-seeklogo.com.png'
        ]
    ],

];
            $selectedMemberIndex = -1; 

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['member'])) {
            $memberIndex = intval($_GET['member']);
            if ($memberIndex >= 0 && $memberIndex < count($teamMembers)) {
                $selectedMemberIndex = $memberIndex;

              }
          }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Team Profile - GROUP 8</title>
</head>
<body>
    <header>
        <h1>MEET GROUP 8</h1>
    </header>

    <div class="container">
        <?php foreach ($teamMembers as $index => $member): ?>
        <div class="team-member">
            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
            <div>
                <h2 class="member-name" data-index="<?php echo $index; ?>"><?php echo $member['name']; ?></h2>
                <p><strong>Position: <?php echo $member['position']; ?><strong></p>
                <br>
                <p><?php echo $member['description2']; ?></p>
                <p><a href="?member=<?php echo $index; ?>"></a></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-name"></h2>
            <p id="modal-position"></p>
            <p id="modal-description"></p>
            <div id="modal-links"></div>
            <img id="modal-image" src="" alt="" style="width:200px;height:200px;border-radius:50%;margin-bottom:10px;">
        </div>
    </div>

    <!-- Feedback Form Section -->
    <div class="feedback-form">
        <h2>Please Leave Us a Feedback</h2>
        <form method="POST" action="feedback.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];
        var memberNames = document.getElementsByClassName("member-name");
        var teamMembers = <?php echo json_encode($teamMembers); ?>;

        function openModal(index) {
            var member = teamMembers[index];
            document.getElementById("modal-name").innerText = member.name;
            document.getElementById("modal-position").innerText = "Position: " + member.position;
            document.getElementById("modal-description").innerText = member.description;
            document.getElementById("modal-image").src = member.image;

            var linksHtml = '';
            if (member.profileLink) {
                linksHtml += '<a href="' + member.profileLink + '" target="_blank"><img src="' + member.socialIcons.facebook + '" alt="Facebook" style="width:24px;height:24px;margin-right:10px;"></a>';
            }
            if (member.githubLink) {
                linksHtml += '<a href="' + member.githubLink + '" target="_blank"><img src="' + member.socialIcons.github + '" alt="GitHub" style="width:24px;height:24px;"></a>';
            }
            document.getElementById("modal-links").innerHTML = linksHtml;

            modal.classList.add("show");
        }

        function closeModal() {
            modal.classList.remove("show");
        }

        for (var i = 0; i < memberNames.length; i++) {
            memberNames[i].addEventListener("click", function() {
                var index = this.getAttribute("data-index");
                openModal(index);
            });
        }

        span.onclick = function() {
            closeModal();
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        };


        <?php if ($selectedMemberIndex !== -1): ?>
        openModal(<?php echo $selectedMemberIndex; ?>);
        <?php endif; ?>
    });
    </script>
</body>
</html>
