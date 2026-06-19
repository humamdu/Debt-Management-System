# API
All routes are under `/api` and protected by Sanctum. Business data is tenant-scoped by `organization_id` except Super Admin.

Resources: `organizations`, `currencies`, `debt-types`, `accounts`, `debts`, `payments`.
Custom: `GET /dashboard`, `GET /accounts/{id}/statement`, `POST /payments/{id}/reverse`, `GET /reports/debts`, `GET /reports/payments`, `GET /reports/overdue`, `GET /reports/export?format=pdf|xlsx`.
