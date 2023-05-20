# database

```mermaid
erDiagram
    User ||--o{ Tweet: "has"
    User }o--o{ Tweet: "likes"
    User }o--o{ User: "follows"
    Tweet }o--o{ Tag: "has"
```
