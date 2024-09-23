# Use official PHP 8.3 image
FROM php:8.3-fpm

# Create a new user with the same UID and GID
ARG HOST_UID
ARG HOST_GID

RUN groupadd -g ${HOST_GID} myuser && \
    useradd -u ${HOST_UID} -g myuser -m myuser

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies
USER root
RUN apt-get update && apt-get install -y \
    bash \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the local project files into the container
COPY . .

# Set proper permissions
RUN chown -R myuser:myuser /var/www/html && chmod -R 755 /var/www/html

# Switch to myuser for running the application
USER myuser

# Expose the default PHP-FPM port
EXPOSE 9000

# Start PHP-FPM service
CMD ["php-fpm"]
