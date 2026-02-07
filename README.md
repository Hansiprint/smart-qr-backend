# Project Architecture

This project follows a 3-layer architecture to ensure reliability and maintainability.

## 1. Directive (What to do)
- **Location**: `directives/`
- **Purpose**: SOPs and instructions in Markdown.
- **Role**: Defines goals, inputs, tools, and outputs.

## 2. Orchestration (Decision making)
- **Role**: The AI Agent (You).
- **Responsibility**: Read directives, call execution tools, handle errors, and self-anneal.

## 3. Execution (Doing the work)
- **Location**: `execution/`
- **Purpose**: Deterministic Python scripts.
- **Role**: Handle API calls, data processing, and file operations reliably.

## Directory Structure
- `directives/`: Instruction sets (Markdown).
- `execution/`: Python scripts/tools.
- `.tmp/`: Intermediate files (regenerated as needed).
- `.env`: Environment variables and secrets.
