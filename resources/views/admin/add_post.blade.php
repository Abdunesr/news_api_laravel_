<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post News - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Admin Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <i class="fas fa-newspaper text-primary-600 text-2xl"></i>
                            <span class="ml-2 text-xl font-bold text-gray-900">NewsPortal</span>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center">
                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" id="user-menu" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center">
                                        <i class="fas fa-user text-primary-600"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-primary-500 to-primary-600 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-bold text-white">
                            <i class="fas fa-plus-circle mr-2"></i> Create New News Article
                        </h2>
                        <a href="#" class="text-primary-100 hover:text-white transition duration-150">
                            <i class="fas fa-question-circle text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="px-6 py-6">
                    <form method="POST" action="{{ route('admin.news.store') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-heading text-primary-500 mr-1"></i> Title
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="title" id="title" required
                                    class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-3 sm:text-sm border-gray-300 rounded-md border"
                                    placeholder="Enter news title">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">
                                        <i class="fas fa-asterisk text-xs text-red-500"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-align-left text-primary-500 mr-1"></i> Content
                            </label>
                            <div class="mt-1">
                                <textarea name="content" id="content" rows="8" required
                                    class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border border-gray-300 rounded-md p-4"
                                    placeholder="Write the news content here..."></textarea>
                            </div>
                        </div>

                        <!-- Summary -->
                        <div>
                            <label for="summary" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-file-alt text-primary-500 mr-1"></i> Summary
                            </label>
                            <div class="mt-1">
                                <textarea name="summary" id="summary" rows="3" required
                                    class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border border-gray-300 rounded-md p-4"
                                    placeholder="Brief summary of the news..."></textarea>
                            </div>
                        </div>

                        <!-- Category & Status -->
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Category -->
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-tag text-primary-500 mr-1"></i> Category
                                </label>
                                <div class="mt-1">
                                    <select name="category" id="category" required
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none sm:text-sm rounded-md">
                                        <option value="" disabled selected>Select a category</option>
                                        <option value="sports">Sports</option>
                                        <option value="politics">Politics</option>
                                        <option value="entertainment">Entertainment</option>
                                        <option value="technology">Technology</option>
                                        <option value="science">Science</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-flag text-primary-500 mr-1"></i> Status
                                </label>
                                <div class="mt-1">
                                    <select name="status" id="status" required
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none sm:text-sm rounded-md">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Source Info -->
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Source Name -->
                            <div>
                                <label for="source_name" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-font text-primary-500 mr-1"></i> Source Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="source_name" id="source_name" required
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-2 sm:text-sm border-gray-300 rounded-md border"
                                        placeholder="News source">
                                </div>
                            </div>

                            <!-- Source URL -->
                            <div>
                                <label for="source_url" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-link text-primary-500 mr-1"></i> Source URL
                                </label>
                                <div class="mt-1">
                                    <input type="url" name="source_url" id="source_url" required
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-2 sm:text-sm border-gray-300 rounded-md border"
                                        placeholder="https://example.com">
                                </div>
                            </div>
                        </div>

                        <!-- Published At & Media -->
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Published At -->
                            <div>
                                <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-calendar-alt text-primary-500 mr-1"></i> Publish Date
                                </label>
                                <div class="mt-1">
                                    <input type="datetime-local" name="published_at" id="published_at"
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-2 sm:text-sm border-gray-300 rounded-md border">
                                </div>
                            </div>

                            <!-- Image URL -->
                            <div>
                                <label for="image_url" class="block text-sm font-medium text-gray-700 mb-1">
                                    <i class="fas fa-image text-primary-500 mr-1"></i> Image URL (Optional)
                                </label>
                                <div class="mt-1">
                                    <input type="url" name="image_url" id="image_url"
                                        class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-2 sm:text-sm border-gray-300 rounded-md border"
                                        placeholder="https://example.com/image.jpg">
                                </div>
                            </div>
                        </div>

                        <!-- Video URL -->
                        <div>
                            <label for="video_url" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-video text-primary-500 mr-1"></i> Video URL (Optional)
                            </label>
                            <div class="mt-1">
                                <input type="url" name="video_url" id="video_url"
                                    class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-4 pr-12 py-2 sm:text-sm border-gray-300 rounded-md border"
                                    placeholder="https://example.com/video.mp4">
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                            <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fas fa-times mr-2"></i> Cancel
                            </button>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fas fa-paper-plane mr-2"></i> Publish News
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>