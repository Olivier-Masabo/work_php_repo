 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: #000;
            color: #fff;
        }

        .header {
            background: #000;
            border-bottom: 1px solid #262626;
            padding: 8px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            max-width: 935px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .username {
            font-size: 20px;
            font-weight: 600;
        }

        .header-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        .logout-btn {
            background: #363636;
            color: #fff;
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #424242;
        }

        .container {
            max-width: 935px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .profile-header {
            display: flex;
            margin-bottom: 44px;
            gap: 30px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            padding: 3px;
            cursor: pointer;
        }

        .profile-pic-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #333;
            border: 3px solid #000;
        }

        .profile-info {
            flex: 1;
        }

        .profile-actions {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .profile-username {
            font-size: 20px;
            font-weight: 400;
        }

        .btn {
            background: #363636;
            color: #fff;
            border: none;
            padding: 7px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn:hover {
            background: #424242;
        }

        .stats {
            display: flex;
            gap: 40px;
            margin-bottom: 20px;
        }

        .stat {
            font-size: 16px;
        }

        .stat-number {
            font-weight: 600;
        }

        .stat-label {
            font-weight: 400;
            color: #fff;
        }

        .profile-bio {
            font-size: 14px;
        }

        .bio-name {
            font-weight: 600;
            margin-bottom: 2px;
        }

        .bio-text {
            color: #fff;
            line-height: 1.5;
        }

        .tabs {
            display: flex;
            justify-content: center;
            gap: 60px;
            border-top: 1px solid #262626;
            margin-bottom: 20px;
        }

        .tab {
            padding: 15px 0;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #737373;
            cursor: pointer;
            border-top: 1px solid transparent;
            margin-top: -1px;
        }

        .tab.active {
            color: #fff;
            border-top-color: #fff;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 4px;
        }

        .post {
            aspect-ratio: 1;
            background: #262626;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .post:hover .post-overlay {
            opacity: 1;
        }

        .post-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            opacity: 0;
            transition: opacity 0.2s;
        }

        .overlay-stat {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .profile-header {
                gap: 15px;
            }

            .profile-pic {
                width: 77px;
                height: 77px;
            }

            .stats {
                gap: 20px;
                font-size: 14px;
            }

            .profile-actions {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .tabs {
                gap: 30px;
            }

            .posts-grid {
                gap: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-content">
            <div class="username">username</div>
            <div class="header-icons">
                <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6l5.25 3.15.75-1.23-4-2.42z"/>
                </svg>
                <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <button class="logout-btn">Logout</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <div class="profile-pic">
                <div class="profile-pic-inner"></div>
            </div>
            
            <div class="profile-info">
                <div class="profile-actions">
                    <div class="profile-username">username</div>
                    <button class="btn">Edit profile</button>
                    <button class="btn">View archive</button>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" style="cursor: pointer;">
                        <path d="M12 9a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0-14a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                </div>
                
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">54</span>
                        <span class="stat-label"> posts</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">834</span>
                        <span class="stat-label"> followers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">162</span>
                        <span class="stat-label"> following</span>
                    </div>
                </div>
                
                <div class="profile-bio">
                    <div class="bio-name">Your Name</div>
                    <div class="bio-text">
                        Digital Creator<br>
                        📍 Based in New York<br>
                        ✨ Living my best life
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs">
            <div class="tab active">POSTS</div>
            <div class="tab">SAVED</div>
            <div class="tab">TAGGED</div>
        </div>
    </div>
</body>
</html>