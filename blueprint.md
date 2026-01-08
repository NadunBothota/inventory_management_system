# Inventory Management System

## Overview

This is a simple inventory management system that allows users to manage inventory items. It provides a RESTful API for creating, reading, updating, and deleting inventory items.

## Features

- List all inventory items
- View a single inventory item
- Create a new inventory item
- Update an existing inventory item
- Delete an inventory item

## API Endpoints

| Method | URI | Action | Route Name |
|---|---|---|---|
| GET | `/inventory-items` | `index` | `inventory-items.index` |
| POST | `/inventory-items` | `store` | `inventory-items.store` |
| GET | `/inventory-items/{inventory_item}` | `show` | `inventory-items.show` |
| PUT/PATCH | `/inventory-items/{inventory_item}` | `update` | `inventory-items.update` |
| DELETE | `/inventory-items/{inventory_item}` | `destroy` | `inventory-items.destroy` |

## Database Schema

### `inventory_items` table

| Column | Type | Modifiers |
|---|---|---|
| `id` | `bigint` | unsigned, auto-incrementing primary key |
| `serial_number` | `string` | unique |
| `device_equipment_name` | `string` | |
| `department` | `string` | |
| `reference_number` | `string` | unique |
| `monetary_value` | `decimal(8, 2)` | |
| `item_category_id` | `bigint` | unsigned |
| `created_at` | `timestamp` | nullable |
| `updated_at` | `timestamp` | nullable |

### `item_categories` table

| Column | Type | Modifiers |
|---|---|---|
| `id` | `bigint` | unsigned, auto-incrementing primary key |
| `name` | `string` | |
| `created_at` | `timestamp` | nullable |
| `updated_at` | `timestamp` | nullable |

## Current Task

- N/A
