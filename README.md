# Knowledge Base PHP Application
A simple hierarchical knowledge base system built with pure PHP using OOP principles.

## Features
- **Topic Hierarchy**: Three-level structure (Topics → Subtopics → Content)
- **Interactive Navigation**: Clickable topics and subtopics
- **Dynamic Content**: Automatically displays relevant content
- **Visual Feedback**: Highlights selected items

## Tech Stack
- **Backend**: PHP 7.4+ (Object-Oriented)
- **Frontend**: Vanilla HTML/CSS
- **Data**: In-memory array storage (easily upgradable to DB)

## Project Structure

knowledge-base/
├── index.php # Entry point
├── classes/
│ ├── Database.php # Data repository
│ ├── Theme.php # Topic entity
│ └── Subtheme.php # Subtopic entity
└── assets/
└── style.css # UI styles


## Installation

1. Clone repository:
   ```bash
   git clone https://github.com/yourusername/knowledge-base.git

2. Start PHP server:
cd knowledge-base && php -S localhost:8000

3. Open in browser:
http://localhost:8000
